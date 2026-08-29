# Upgrade and migration

## 0.1.2

No breaking changes. Patch release: P3 OOTB verification handbook, PHPUnit bootstrap for split mirrors, and split CI dependency resolution.

```bash
composer update symfinity/ux-blocks-full
```

Individual tier packages may also publish patch releases under the same `^0.1` constraint — Composer resolves the latest compatible versions automatically. After updating, clear Symfony cache in dev if AssetMapper or Twig cached CSS.

Pair with `symfinity/ux-blocks-core` **^0.1.6** (or newer) for automatic inline tier CSS when fragments render without `symfinity/ui-kernel`.

## 0.1.1

No breaking changes. Patch release: metapackage boundary PHPUnit, expanded installation handbook, ROADMAP, and split mirror CI matrix.

```bash
composer update symfinity/ux-blocks-full
```

## 0.1.0

Initial release — five-tier metapackage with Flex recipe.

```bash
composer require symfinity/ux-blocks-full
```

See [Installation](installation.md) and [Verification](verification.md).
