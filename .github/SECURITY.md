# Security Policy

## Supported Versions

| Version | Supported |
|---------|-----------|
| 0.1.x   | Yes       |

## Reporting a Vulnerability

If you discover a security vulnerability, **do not** open a public issue. Email **dev@symfinity.net** with:

- Type of vulnerability
- Full paths of source file(s) related to the issue
- The location of the affected code (tag, branch, commit, or URL)
- Step-by-step reproduction instructions
- Proof-of-concept or exploit code (if possible)
- Impact and plausible attack scenario

We aim to acknowledge within 48 hours and provide a detailed response within 7 days.

## Security best practices

This package is a **Composer metapackage** (dependency aggregator only). Security fixes for component behaviour belong in the tier packages (`ux-blocks-core`, `ux-blocks-form`, etc.) or your application code.

1. Keep Symfony and UX Blocks tier packages updated
2. Do not expose unauthenticated admin surfaces built with demo components on production without proper authorization

## Security contact

**dev@symfinity.net**
