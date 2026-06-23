<div align="center">

# UX Blocks Full

### Metapackage — core, extended, and interactive UX Blocks tiers for full app UI

[![PHP Version](https://img.shields.io/badge/PHP-8.2+-777BB4?style=flat&logo=php&logoColor=white)](composer.json)
<br/>
[![CI](https://github.com/symfinity/ux-blocks-full/actions/workflows/ci.yml/badge.svg)](https://github.com/symfinity/ux-blocks-full/actions/workflows/ci.yml)
<br/>
[![Release](https://img.shields.io/packagist/v/symfinity/ux-blocks-full.svg?style=flat&logo=packagist&logoColor=white)](https://packagist.org/packages/symfinity/ux-blocks-full)
[![Downloads](https://img.shields.io/packagist/dt/symfinity/ux-blocks-full.svg?style=flat&logo=packagist&logoColor=white)](https://packagist.org/packages/symfinity/ux-blocks-full)
[![License](https://img.shields.io/badge/license-MIT-blue.svg?style=flat)](LICENSE)

</div>

> [!NOTE]
> **Read-only mirror.**
> See [CONTRIBUTING.md](CONTRIBUTING.md) for how to propose changes.

## Features

- **Full app UI profile** — pulls `ux-blocks-core`, `ux-blocks-extended`, and `ux-blocks-interactive`
- **One require** — smallest composer line for admin and product shells
- **Vertical tiers stay opt-in** — marketing, ecommerce, live, lab, and kiosk are separate packages

## Prerequisites

Add the [symfinity/recipes](https://github.com/symfinity/recipes) Flex endpoint to your project's `composer.json` (see [recipes README](https://github.com/symfinity/recipes/blob/main/README.md)) — recipes are not in Symfony's official recipe repository yet.

## Installation

Marketing, ecommerce, live, lab, and kiosk packages are **explicit opt-in**. See [UX Blocks install profiles](https://github.com/symfinity/ux-blocks#install-profiles).

```bash
composer require symfinity/ux-blocks-full
```

See [Installation](docs/installation.md).

## Quick Start

```bash
composer require symfinity/ux-blocks-full
composer require symfinity/ui-kernel   # optional themed apps
```

## Documentation

- **[Installation](docs/installation.md)** — Flex, dependencies, verify

## Requirements

- PHP 8.2 or higher

## Support

- [GitHub Issues](https://github.com/symfinity/ux-blocks-full/issues)
- [Security](.github/SECURITY.md)
- [Contributing](CONTRIBUTING.md)

## License

[MIT](LICENSE)
