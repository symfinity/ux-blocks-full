# Verification

**Integration profile:** P3 — metapackage (five tier bundles at `^0.1`).

Checks after installing **symfinity/ux-blocks-full** in a Symfony app.

## Clean-app smoke

On a fresh Symfony 7.4+ project with the [symfinity/recipes](https://github.com/symfinity/recipes) Flex endpoint:

```bash
composer create-project symfony/skeleton /tmp/ux-blocks-full-smoke --version="7.4.*"
cd /tmp/ux-blocks-full-smoke

composer config extra.symfony.endpoint '["flex://defaults"]'
composer require symfinity/ux-blocks-full

composer show symfinity/ux-blocks-core symfinity/ux-blocks-form \
  symfinity/ux-blocks-extended symfinity/ux-blocks-interactive symfinity/ux-blocks-live

php bin/console about
```

Expected: all five tier packages installed; five UX Blocks bundles registered in `config/bundles.php`.

### Stage B (LiveComponent)

```bash
composer show symfony/ux-live-component symfony/ux-turbo
```

### Component render smoke

Add Chameleon theme CSS with `symfinity/ui-kernel`, **or** rely on automatic inline tier CSS from `symfinity/ux-blocks-core` **^0.1.6** when ui-kernel is not installed (no manual AssetMapper wiring required).

```twig
<twig:ComboboxLive name="demo" placeholder="Choose…" />
```

Load the page — expect HTTP 200 and `blocks.live.combobox` in the response body.

Optional themed install:

```bash
composer require symfinity/ui-kernel
```

## See also

- [Installation](installation.md)
- [CHANGELOG](../CHANGELOG.md)
