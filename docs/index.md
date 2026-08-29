---
integration_profile: P3
---

# UX Blocks Full

`symfinity/ux-blocks-full` is a Composer **metapackage** — one install line for the complete official UX Blocks catalog.

## What you get

| Tier | Package | Role |
|------|---------|------|
| Atoms | `symfinity/ux-blocks-core` | Foundation Twig components |
| Forms | `symfinity/ux-blocks-form` | Form controls and field compounds |
| Compounds | `symfinity/ux-blocks-extended` | Application UI patterns |
| Interactive | `symfinity/ux-blocks-interactive` | Client-side Stimulus widgets |
| Live | `symfinity/ux-blocks-live` | Symfony LiveComponent widgets |

## Handbook

- [Installation](installation.md) — Flex endpoint, `composer require`, bundle registration
- [Verification](verification.md) — smoke checks after install
- [Upgrade](upgrade.md) — patch-line updates from 0.1.0 onward

## Optional add-ons

- **Chameleon styling:** `composer require symfinity/ui-kernel` (not part of full)
- **Marketing sections:** `composer require symfinity/ux-blocks-marketing`
- **Shop sections:** `composer require symfinity/ux-blocks-ecommerce`

For smaller installs, require individual tier packages instead. See [symfinity/ux-blocks](https://github.com/symfinity/ux-blocks) install profiles.

Consumer gate: profile **P3 metapackage** — each pulled tier passes its own integration profile.
