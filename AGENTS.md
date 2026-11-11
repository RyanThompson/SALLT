# Agent notes: 🧂 SALLT

This repo is the **SALLT create-project starter** (`ryantompson/sallt`), not a product app. Brand mark: **🧂**.

## Intent

1. `composer create-project ryanthompson/sallt {app}` → Laravel shell + Streams core + SDK.
2. `php artisan sallt:onboard` → TUI discovery tree (frontend / panel(s) / tenancy / defaults vs kitchen sink).
3. Generators (`streams:make` + KindRegistry recipes) emit code from that recipe.
4. Architecture law: `packages/adr-sallt` (or vendored ADR-SALLT) — read **000.3** (P1–P9), then **ADR 0001** (sole reach-order lens).

## Before changing generators

- Prefer extending SDK kinds/recipes over adding a `make:*` zoo.
- Emit plumbing only (no business rules) unless the onboard recipe asked for a domain.
- `streams:validate` must stay green after emit.

## Local layout

- App root: this repo (`Sites/SALLT`)
- SDK: path `../_packages/streams-sdk` (see `composer.json` repositories)
- Canon: `packages/adr-sallt` → `../../_packages/ADR-SALLT`

## Commands

```bash
composer onboard          # → php artisan sallt:onboard
php artisan streams:make --list --json
php artisan streams:validate
```
