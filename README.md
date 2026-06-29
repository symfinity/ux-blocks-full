<div align="center">

# UX Blocks Full

### Metapackage for the complete official catalog (core, form, extended, interactive, live)

[![PHP Version](https://img.shields.io/badge/PHP-8.2+-777BB4?style=flat&logo=php&logoColor=white)](composer.json)
[![Symfony](https://img.shields.io/badge/Symfony-7.4+-343434?style=flat&logo=symfony&logoColor=white)](composer.json)
<br/>
[![CI](https://github.com/symfinity/ux-blocks-full/actions/workflows/ci.yml/badge.svg)](https://github.com/symfinity/ux-blocks-full/actions/workflows/ci.yml)
<br/>
[![Release](https://img.shields.io/packagist/v/symfinity/ux-blocks-full.svg?style=flat&logo=packagist&logoColor=white)](https://packagist.org/packages/symfinity/ux-blocks-full)
[![License](https://img.shields.io/badge/license-MIT-blue.svg?style=flat)](LICENSE)

</div>

> [!NOTE]
> **Read-only mirror.**
> See [CONTRIBUTING.md](CONTRIBUTING.md) for how to propose changes.

## Features

- **Five-tier catalog** — core, form, extended, interactive, and live in one `composer require`
- **Flex recipe** — registers all five tier bundles automatically
- **Chameleon-agnostic** — no hard dependency on `ui-kernel`, `ui-action`, or `ux-runtime`
- **Vertical opt-ins** — marketing and ecommerce via `suggest` only
- **Metapackage boundary** — no PHP source; tier bundles own runtime and handbook depth

## Prerequisites

Add the [symfinity/recipes](https://github.com/symfinity/recipes) Flex endpoint to your project's `composer.json` (see [recipes README](https://github.com/symfinity/recipes/blob/main/README.md)).

## Installation

```bash
composer require symfinity/ux-blocks-full
```

See [Installation](docs/installation.md) for bundle list, Stage B deps, and verification.

## Documentation

- **[Handbook index](docs/index.md)** — what full installs and optional add-ons
- **[Installation](docs/installation.md)** — Flex, bundles, kernel opt-in
- **[Verification](docs/verification.md)** — clean-app smoke steps

## Requirements

- PHP 8.2 or higher (via tier packages)
- Symfony 7.4 or 8.x (via tier packages)
- All five `symfinity/ux-blocks-*` tiers at `^0.1`

## Support

- [Contributing](CONTRIBUTING.md)
- [Security](.github/SECURITY.md)
- [GitHub Issues](https://github.com/symfinity/ux-blocks-full/issues)

## License

[MIT](LICENSE)
