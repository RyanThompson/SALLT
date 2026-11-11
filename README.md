# 🧂 SALLT

**S**treams · **A**lpine.js · **L**aravel · **L**ivewire · **T**ailwind

Brand mark: **🧂**.

## Path 1 — Laravel create-project (this repo)

Minimal download, then SDK onboard TUI. **No starter templates yet** — onboard records generation *options*; recipes emit code as generators land.

```bash
composer create-project ryanthompson/sallt my-app \
  --repository='{"type":"vcs","url":"https://github.com/RyanThompson/SALLT"}'
```

What Composer installs on top of the Laravel shell:

| Package | Role |
|---|---|
| `streams/core` | Platform |
| `streams/sdk` | Generators + **`streams:onboard`** TUI |

After create-project scripts (key, sqlite, migrate), Composer runs:

```bash
php artisan streams:onboard
```

(`sallt:onboard` is an alias.)

That writes `streams.onboard.json` — a recipe of options (frontend, panels, tenancy, API, “discover existing Streams API/client?”, sample domain). Generators are not emitted until KindRegistry recipes exist for each step.

Flags for CI / scripting:

```bash
php artisan streams:onboard --defaults
php artisan streams:onboard --kitchen-sink
php artisan streams:onboard --json --no-write
php artisan streams:onboard --surface=js   # path 2 preview
php artisan streams:onboard --apply        # emit implemented steps (domain first)
php artisan streams:onboard --kitchen-sink --apply --force
php artisan streams:validate
```

`--apply` currently scaffolds domain plumbing (Entry model, repository, lang locales, `streams/{handle}.json`, app-tree `$ref`). UI / API / Alpine / tenancy steps stay pending until their generators land.

## Path 2 — JS / front-end (later)

Same discovery fashion for a JS client app. Onboard can ask: *Do you have a Streams API / client to discover?* and coordinate with a Path 1 Laravel SALLT app. Not shipped as a create-project yet; `--surface=js` exercises the shared recipe shape.

## Golden app: `RyanThompson/todos`

When generation works, regenerate a todos app from a kitchen-sink (or documented) recipe and **rebase `ryanthompson/todos` onto that output** so the public sample always matches the generator — not a hand-maintained fork.

## Local dogfood

- Path-pin SDK: `../_packages/streams-sdk` (see `composer.json`)
- Optional canon: `ln -sfn ../../_packages/ADR-SALLT packages/adr-sallt`
- ADR lens: `adr/0001` · punch list: ADR-SALLT `PUNCHLIST.md`

## License

MIT
