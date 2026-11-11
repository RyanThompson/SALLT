# Agent notes: 🧂 SALLT

Create-project starter (`ryantompson/sallt`). Brand: **🧂**.

## Flow

1. `composer create-project` → Laravel shell + **`streams/core`** + **`streams/sdk`** only (UI/API/domains come later from onboard).
2. Create-project scripts finish (env key, sqlite, migrate).
3. **`php artisan streams:onboard`** (alias `sallt:onboard`) — SDK TUI writes `streams.onboard.json`.
4. Implement / run KindRegistry recipes against that recipe (**no templates bundled yet**).
5. When generators are ready, rebase **`RyanThompson/todos`** onto regenerated output.

## Two paths

| Path | Entry | Notes |
|---|---|---|
| 1 Laravel | this repo | Current |
| 2 JS / front-end | later package | Same recipe keys; can discover existing Streams API |

## Canon

`packages/adr-sallt` (optional local link) → ADR-SALLT: **000.3** then **ADR 0001**.

## Commands

```bash
composer onboard
php artisan streams:onboard --defaults
php artisan streams:make --list --json
php artisan streams:validate
```
