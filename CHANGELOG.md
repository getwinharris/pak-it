# Changelog

All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.1.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [Unreleased]

### Added
- AST-based JS→PHP converter using Acorn parser (94% pass rate on lodash)
- PHP reserved name detection to avoid function name conflicts
- Regex literal support (converts to PHP strings)
- Math.*, Number.*, Object.*, JSON.* static member handling
- `module.exports` to `return` conversion
- `require()` to `require __DIR__` path conversion

### Fixed
- Multi-line variable declarations
- Trailing commas in expressions
- `typeof x === 'undefined'` to `isset($x)` conversion
- `.length` property access to `count()`/`strlen()` conversion
- ForStatement missing init/update keys

### Changed
- Replaced regex-based converter with AST-based converter as primary
- Reordered identifier resolution: local vars now take precedence over globals

## [0.1.0] - 2026-06-28

### Added
- Initial release
- CLI entry point (`php pak-it`)
- Install script (`install.sh`)
- npm registry resolver
- PyPI registry resolver
- Tarball download and extraction
- Regex-based JS→PHP converter (fallback)
- PHP autoloader generation
- Syntax verification (`php -l`)
- Init command (`php pak-it init <pkg>`)
- Install command (`php pak-it install`)
- Run command (`php pak-it <pkg> [args]`)
- Verify command (`php pak-it verify`)
- pak-it.toml configuration file
- Basic Python→PHP converter stub
