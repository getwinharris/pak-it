# Contributing to pak-it

Thank you for considering contributing to pak-it! This document provides guidelines and instructions for contributing.

## Development Setup

### Prerequisites

- PHP 8.3+
- Node.js 18+ (for the AST parser)
- Git

### Installation

```bash
git clone https://github.com/getwinharris/pak-it.git
cd pak-it
composer install
npm install
```

### Project Structure

```
pak-it/
├── pak-it              # CLI entry point
├── install.sh          # One-line installer
├── ast/
│   └── parse.js        # Acorn-based JS parser (Node.js)
├── src/
│   ├── AstConverter.php # AST-based JS→PHP converter
│   ├── NodeConverter.php # Regex-based fallback converter
│   ├── Resolver.php     # Registry resolver (npm + PyPI)
│   ├── Downloader.php   # Tarball download + extract
│   ├── Autoloader.php   # Autoloader generator
│   └── SyntaxCheck.php  # php -l syntax verifier
├── Commands/
│   ├── InitCommand.php  # Init command
│   ├── InstallCommand.php # Install command
│   ├── RunCommand.php   # Run command
│   └── VerifyCommand.php # Verify command
└── vendor/
    └── autoload.php     # Runtime autoloader
```

## How to Contribute

### Reporting Bugs

1. Search existing issues to avoid duplicates
2. Create a new issue with a clear title and description
3. Include steps to reproduce the bug
4. Include the PHP version and OS you're using

### Suggesting Features

1. Search existing issues and discussions
2. Create a new issue with the `feature` label
3. Describe the feature, its use case, and why it should be included

### Submitting Code

1. Fork the repository
2. Create a feature branch: `git checkout -b feature/my-feature`
3. Make your changes
4. Run tests: `php pak-it verify`
5. Run syntax checks: `php -r "foreach(glob('vendor/**/*.php') as \$f) shell_exec('php -l '.\$f);"`
6. Commit with a clear message: `git commit -m "Add: new feature description"`
7. Push: `git push origin feature/my-feature`
8. Open a Pull Request

## Code Style

- Follow PSR-12 coding standards
- Use strict types where possible
- Add docblocks for public methods
- Keep methods focused and small
- Use meaningful variable names

## Testing

### Manual Testing

```bash
# Test with a simple package
php pak-it init is-number

# Test with a complex package
php pak-it init lodash

# Verify all converted files
php pak-it verify
```

### Automated Testing

```bash
# Run all tests
composer test

# Check syntax of all files
composer syntax-check
```

## Conversion Quality

When working on the AST converter, test against lodash as the benchmark:

```bash
# Download lodash for testing
php -r "
require 'src/Resolver.php';
require 'src/Downloader.php';
\$r = new Resolver();
\$info = \$r->resolve('lodash');
\$d = new Downloader();
\$d->download(\$info, '/tmp/lodash-orig');
"

# Test conversion
php -r "
require 'src/AstConverter.php';
\$c = new AstConverter();
\$result = \$c->convertCode('/tmp/lodash-orig/chunk.js');
echo \$result;
"
```

## Pull Request Guidelines

- Keep PRs focused on a single change
- Include a clear description of what changed and why
- Update documentation if needed
- Add tests if applicable
- Ensure all existing tests pass

## License

By contributing, you agree that your contributions will be licensed under the MIT License.

## Questions?

If you have questions about contributing, feel free to open a discussion or reach out on GitHub.
