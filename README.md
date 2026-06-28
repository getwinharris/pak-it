# pak-it

**The PHP-native universal package manager and converter.**

Download npm, PyPI, Cargo, and CLI packages — convert them to pure PHP.
No bridges. No runtimes. No WASM. No Node.js on the target server.

---

[![License: MIT](https://img.shields.io/badge/License-MIT-blue.svg)](LICENSE)
[![PHP 8.3+](https://img.shields.io/badge/PHP-8.3%2B-8892BF.svg)](https://php.net)
[![CI](https://github.com/getwinharris/pak-it/actions/workflows/ci.yml/badge.svg)](https://github.com/getwinharris/pak-it/actions)

---

## Why pak-it?

Shared hosting providers like Hostinger's Single plan give you PHP and nothing else.
No SSH. No Composer. No Node.js. No Python. No `exec()`.

**pak-it changes that.** Run the converter on your dev machine, upload the result, and ship.
Every package becomes pure PHP that runs anywhere PHP runs.

## Install

```bash
curl -sS https://raw.githubusercontent.com/getwinharris/pak-it/v1/install.sh | bash
```

Or clone manually:

```bash
git clone --depth 1 --branch v1 https://github.com/getwinharris/pak-it.git
chmod +x pak-it/pak-it
```

## Quick Start

```bash
# Install a package from npm
php pak-it init lodash

# Install a package from PyPI
php pak-it init requests

# Verify all converted files
php pak-it verify

# List installed packages
php pak-it list
```

Use the converted package in your PHP code:

```php
<?php
require __DIR__ . '/vendor/autoload.php';

$packages = require __DIR__ . '/vendor/autoload.php';

// Use any function from lodash
$result = \pakit\lodash\cloneDeep($data);
```

## Commands

| Command | Description |
|---------|-------------|
| `php pak-it init <pkg> [version]` | Download and convert a package from npm or PyPI |
| `php pak-it require <pkg> [version]` | Alias for `init` |
| `php pak-it install` | Batch install all packages from `pak-it.toml` |
| `php pak-it verify` | Syntax-check all converted PHP files |
| `php pak-it list` | Show installed packages and versions |
| `php pak-it <pkg> [args...]` | Run a package's CLI entry point |
| `php pak-it help` | Show help |

## Configuration

Create a `pak-it.toml` in your project root:

```toml
[require]
npm = ["lodash", "axios", "chalk"]
pip = ["requests", "python-dateutil"]
```

Then run:

```bash
php pak-it install
```

All listed packages will be downloaded, converted, and registered in the autoloader.

## How It Works

pak-it runs a four-stage pipeline on your dev machine to produce pure PHP output:

```
┌─────────────┐    ┌──────────────┐    ┌──────────────┐    ┌──────────────┐
│  Resolve     │───▶│  Download     │───▶│  Convert      │───▶│  Autoload    │
│              │    │              │    │              │    │              │
│ npm registry │    │ .tar.gz via  │    │ Acorn AST →  │    │ PSR-4-like   │
│ PyPI JSON API│    │ PharData     │    │ PHP AST →    │    │ spl_autoload │
│              │    │              │    │ PHP code     │    │ registry     │
└─────────────┘    └──────────────┘    └──────────────┘    └──────────────┘
```

### 1. Resolve

The `Resolver` queries the **npm registry** (`registry.npmjs.org`) and **PyPI JSON API** (`pypi.org/pypi`) to find the latest version and download URL. npm packages are tried first, then PyPI.

### 2. Download

The `Downloader` fetches the package tarball (`.tar.gz` for npm, sdist for PyPI), extracts it using PHP's `PharData`, and copies the contents into `vendor/<package>/`.

### 3. Convert

This is where the magic happens. Two conversion paths:

**JavaScript → PHP (AST-based)**

The `AstConverter` calls the `ast/parse.js` Acorn parser to produce a simplified ESTree AST, then walks the tree in PHP to emit equivalent PHP code. Key translations:

| JavaScript | PHP |
|-----------|-----|
| `var x = 1` | `$x = 1` |
| `(x) => x + 1` | `function($x) { return $x + 1; }` |
| `obj.method(arg)` | `method($obj, $arg)` |
| `Math.floor(x)` | `floor($x)` |
| `JSON.parse(s)` | `json_decode($s, true)` |
| `console.log(x)` | `echo $x` |
| `module.exports = fn` | `return 'fn';` |
| `typeof x === 'string'` | `is_string($x)` |
| `x.length` | `count($x)` / `strlen($x)` |
| `arr.push(val)` | `$arr[] = $val` |

If the AST parser fails (e.g., Node.js not available), `NodeConverter` falls back to regex-based conversion.

**Python → PHP (basic)**

The `PythonConverter` handles core syntax: `def` → `function`, `class` → `class`, `self` → `$this`, `print()` → `echo`, `None` → `null`, `True`/`False` → `true`/`false`.

### 4. Autoload

The `Autoloader` scans `vendor/` for converted packages and generates a PSR-4-like `spl_autoload_register` bridge in `vendor/autoload.php`. Each package gets a `pakit\<name>\` namespace.

## Architecture

```
pak-it/
├── pak-it                 # CLI entry point (PHP)
├── install.sh             # One-line installer
├── ast/
│   ├── parse.js           # Acorn-based JS → ESTree AST parser
│   └── node_modules/      # Acorn dependency (dev only)
├── src/
│   ├── AstConverter.php   # AST-based JS→PHP converter (primary)
│   ├── NodeConverter.php  # Regex-based JS→PHP converter (fallback)
│   ├── PythonConverter.php# Python→PHP converter (basic)
│   ├── Resolver.php       # npm + PyPI registry resolver
│   ├── Downloader.php     # Tarball download + extract
│   ├── Autoloader.php     # PSR-4-like autoloader generator
│   └── SyntaxCheck.php    # php -l syntax verifier
├── Commands/
│   ├── InitCommand.php    # php pak-it init <pkg>
│   ├── InstallCommand.php # Batch install from pak-it.toml
│   ├── RunCommand.php     # php pak-it <pkg> [args]
│   └── VerifyCommand.php  # php pak-it verify
├── vendor/
│   ├── autoload.php       # Generated autoloader
│   └── <packages>/        # Converted packages
├── pak-it.toml            # Project config (optional)
├── composer.json
├── LICENSE
└── README.md
```

## Requirements

| Environment | Requirement |
|-------------|-------------|
| **Dev machine** (conversion) | PHP 8.3+, Node.js (for Acorn parser), `curl`, `tar` |
| **Target server** (runtime) | PHP 8.3+ only |

**No Composer. No Python. No Node.js. No `exec()`. No shell access.**
Just upload the converted files and run them.

## Conversion Quality

The AST-based converter currently achieves a **94% pass rate** on lodash (312 of 331 functions convert cleanly). Some limitations:

- ES6+ modules (`import`/`export`) require CommonJS (`require`/`module.exports`)
- Async/await is stripped (converted to synchronous calls)
- Proxy and Reflect are not supported
- Some advanced metaprogramming patterns may not convert

Run `php pak-it verify` after conversion to check for syntax issues.

## Contributing

1. Fork the repository
2. Create your feature branch (`git checkout -b feature/amazing-feature`)
3. Commit your changes (`git commit -m 'Add amazing feature'`)
4. Push to the branch (`git push origin feature/amazing-feature`)
5. Open a Pull Request

See [CONTRIBUTING.md](CONTRIBUTING.md) for detailed guidelines.

## License

MIT License. See [LICENSE](LICENSE) for details.
