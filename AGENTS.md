# Agent notes: SALT

This repo is the **SALLT create-project starter** (`ryantompson/salt`), not a product app.

## Intent

1. `composer create-project ryanthompson/salt {app}` → Laravel shell + Streams core + SDK.
2. `php artisan salt:onboard` → TUI discovery tree (frontend / panel(s) / tenancy / defaults vs kitchen sink).
3. Generators (`streams:make` + KindRegistry recipes) emit code from that recipe.
4. Architecture law: `packages/adr-sallt` (or vendored ADR-SALLT) — read **000.3** (P1–P9), then **ADR 0001** (sole reach-order lens).

## Before changing generators

- Prefer extending SDK kinds/recipes over adding a `make:*` zoo.
- Emit plumbing only (no business rules) unless the onboard recipe asked for a domain.
- `streams:validate` must stay green after emit.

## Local layout

- App root: this repo
- SDK: path `../_packages/streams-sdk` (see `composer.json` repositories)
- Canon: `packages/adr-sallt` → `../../_packages/ADR-SALLT`

## Commands

```bash
composer onboard          # → php artisan salt:onboard
php artisan streams:make --list --json
php artisan streams:validate
```
