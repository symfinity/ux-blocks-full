# Installation

## Prerequisites

Add the [symfinity/recipes](https://github.com/symfinity/recipes) Flex endpoint to your project's `composer.json` (see [recipes README](https://github.com/symfinity/recipes/blob/main/README.md)).

## Composer

```bash
composer require symfinity/ux-blocks-full
```

Composer installs all five tier packages. The Flex recipe registers these bundles in `config/bundles.php`:

- `Symfinity\UxBlocksCore\SymfinityUxBlocksCoreBundle`
- `Symfinity\UxBlocksForm\SymfinityUxBlocksFormBundle`
- `Symfinity\UxBlocksExtended\SymfinityUxBlocksExtendedBundle`
- `Symfinity\UxBlocksInteractive\SymfinityUxBlocksInteractiveBundle`
- `Symfinity\UxBlocksLive\SymfinityUxBlocksLiveBundle`

## Stage B (LiveComponent)

The live tier requires Symfony UX LiveComponent and Turbo. They are pulled in transitively when you require full. Confirm after install:

```bash
composer show symfony/ux-live-component symfony/ux-turbo
```

## Optional Chameleon styling

Full does **not** require `symfinity/ui-kernel`. Add it when you want Symfinity theme tokens and generated CSS:

```bash
composer require symfinity/ui-kernel
```

## Verify installation

```bash
composer show symfinity/ux-blocks-core symfinity/ux-blocks-form \
  symfinity/ux-blocks-extended symfinity/ux-blocks-interactive symfinity/ux-blocks-live

php bin/console about
```

See [Verification](verification.md) for a full clean-app smoke walkthrough.

## Next steps

- [symfinity/ux-blocks-core](https://github.com/symfinity/ux-blocks-core) — component handbook
- [CHANGELOG](../CHANGELOG.md) · [CONTRIBUTING](../CONTRIBUTING.md) · [GitHub Issues](https://github.com/symfinity/ux-blocks-full/issues)
