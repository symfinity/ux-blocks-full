# Installation

## Prerequisites

1. Add the [symfinity/recipes](https://github.com/symfinity/recipes) Flex endpoint to your project's `composer.json` (see [recipes README](https://github.com/symfinity/recipes/blob/main/README.md)).
2. Symfony **7.4+** (or 8.x) with AssetMapper, Stimulus, and UX Twig Component enabled — the standard Symfony **webapp** skeleton satisfies this.
3. Full installs the **complete official tier stack** (core, form, extended, interactive, live). For partial installs, require individual tier packages instead — see [symfinity/ux-blocks](https://github.com/symfinity/ux-blocks) install profiles.

## Composer

```bash
composer require symfinity/ux-blocks-full
```

Composer resolves all five tier packages at `^0.1`:

| Tier | Package |
|------|---------|
| Atoms | `symfinity/ux-blocks-core` |
| Forms | `symfinity/ux-blocks-form` |
| Compounds | `symfinity/ux-blocks-extended` |
| Interactive | `symfinity/ux-blocks-interactive` |
| Live | `symfinity/ux-blocks-live` |

The registry SDK `symfinity/ux-blocks` is pulled transitively from Packagist.

## Symfony Flex

The `0.1` recipe applies:

- Registers all five UX Blocks bundles for **all** environments in `config/bundles.php`:
  - `Symfinity\UxBlocksCore\SymfinityUxBlocksCoreBundle`
  - `Symfinity\UxBlocksForm\SymfinityUxBlocksFormBundle`
  - `Symfinity\UxBlocksExtended\SymfinityUxBlocksExtendedBundle`
  - `Symfinity\UxBlocksInteractive\SymfinityUxBlocksInteractiveBundle`
  - `Symfinity\UxBlocksLive\SymfinityUxBlocksLiveBundle`
- No app config files are copied — each tier bundle auto-configures AssetMapper paths, Twig namespaces, and role registries

### Stage B (LiveComponent)

The live tier requires Symfony UX LiveComponent and Turbo. They are pulled in transitively when you require full. Confirm after install:

```bash
composer show symfony/ux-live-component symfony/ux-turbo
```

## Manual installation

When Flex is unavailable:

1. `composer require symfinity/ux-blocks-full symfony/ux-live-component symfony/ux-turbo`
2. Register all five tier bundles in `config/bundles.php` (see list above)
3. Enable AssetMapper, Stimulus, UX Twig Component, LiveComponent, and Turbo bundles

## Optional Chameleon styling

Full does **not** require `symfinity/ui-kernel`. Add it when you want Symfinity theme tokens and generated CSS:

```bash
composer require symfinity/ui-kernel
```

Optional vertical add-ons (not part of full):

```bash
composer require symfinity/ux-blocks-marketing   # landing sections
composer require symfinity/ux-blocks-ecommerce   # shop sections
```

## Verify installation

```bash
composer show symfinity/ux-blocks-core symfinity/ux-blocks-form \
  symfinity/ux-blocks-extended symfinity/ux-blocks-interactive symfinity/ux-blocks-live

php bin/console about
php bin/console debug:container --tag=twig.component | grep -i Button
```

See [Verification](verification.md) for a full clean-app smoke walkthrough.

## Next steps

- [symfinity/ux-blocks-core](https://github.com/symfinity/ux-blocks-core) — component handbook (start here for role docs)
- [Verification](verification.md) · [CHANGELOG](../CHANGELOG.md) · [CONTRIBUTING](../CONTRIBUTING.md)
