# Changelog

All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [0.1.1] - 2026-06-29

### Added

- Metapackage boundary PHPUnit suite — guards five-tier `require`, marketing/ecommerce-only `suggest`, and no hard dependency on `ui-kernel`, `ui-action`, or `ux-runtime`
- Public [ROADMAP.md](ROADMAP.md) for the 0.1.x → 1.0.x release line
- [SUPPORTERS.md](SUPPORTERS.md) and Composer `funding` metadata for GitHub Sponsors

### Changed

- Split mirror CI expanded to PHP 8.2–8.5 × Symfony 7.4, 8.0, and 8.1 — PHPUnit, PHPStan, and `composer validate` on every matrix cell (Tier B; tier packages from Packagist at `^0.1`)
- Handbook: expanded [installation guide](docs/installation.md) — Stage B LiveComponent check, manual bundle registration, optional Chameleon and vertical add-ons, verification commands
- Packagist archives slimmed via `.gitattributes` `export-ignore` rules

### Notes

- No PHP source and no dependency constraint changes — tier pins remain `^0.1`; patch releases on individual tiers (for example `ux-blocks-form` 0.1.1) resolve automatically via Composer

## [0.1.0] - 2026-06-27

### Added

- Initial release of `symfinity/ux-blocks-full` — Composer metapackage for the complete official UX Blocks catalog
- Explicit `require` on five tier packages at `^0.1`: `ux-blocks-core`, `ux-blocks-form`, `ux-blocks-extended`, `ux-blocks-interactive`, `ux-blocks-live`
- Symfony Flex recipe registering all five tier bundles for every environment
- `suggest` entries for optional vertical packs: `ux-blocks-marketing`, `ux-blocks-ecommerce`
- Consumer handbook: installation guide and post-install verification steps

### Notes

- No PHP source in this package — runtime lives in the tier bundles
- Chameleon styling (`symfinity/ui-kernel`) and UX Runtime remain optional; not bundled into full
- Live tier transitively requires Symfony UX LiveComponent and Turbo (Stage B)
