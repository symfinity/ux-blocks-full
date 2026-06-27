# Changelog

All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

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
