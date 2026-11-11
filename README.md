# SALT

**S**treams · **A**lpine.js · **L**aravel · **L**ivewire · **T**ailwind

Public create-project starter for the salty stack. You get a Laravel shell plus the Streams SDK; then a TUI walks an onboarding tree and generators emit what you need.

```bash
composer create-project ryanthompson/salt my-app
cd my-app
php artisan salt:onboard
```

(Until Packagist lists it, create from GitHub:)

```bash
composer create-project ryanthompson/salt my-app \
  --repository='{"type":"vcs","url":"https://github.com/RyanThompson/salt"}'
```

## What you get (bare minimum)

| Piece | Role |
|---|---|
| Laravel 12 shell | App runtime |
| `streams/core` | Platform — streams, entries, repositories |
| `streams/sdk` (dev) | `streams:make`, validate, capture — and the home for the onboard TUI |
| Canon (optional local link) | `packages/adr-sallt` → ADR-SALLT (`000.3` principles, ADR `0001` stack lens) |

Panel UI, API, Alpine surfaces, multi-tenancy, extra domains — **not** pre-baked. The onboard TUI discovers them, then generators write them.

## Onboarding tree (TUI)

`php artisan salt:onboard` (stub today; full TUI next) asks things like:

- Do you need a frontend?
- Do you need a panel? More than one panel?
- Multi-tenancy?
- Kitchen sink vs defaults (hit enter)?

Answers become a recipe → `streams:make` / KindRegistry generators emit code that passes ADR checklists.

Starter presets (todo, kitchen-sink, headless API) can sit on top of the same tree later.

## Dogfood / local pins

This checkout path-pins `streams/sdk` from `../_packages/streams-sdk` and may symlink ADR canon at `packages/adr-sallt`. Path repos are for Ryan’s machine while the SDK TUI lands; published create-project will use tagged packages.

## Canon

- Reach order / platform: [ADR-SALLT `adr/0001`](https://github.com/RyanThompson/ADR-SALLT)
- Gap map / punch list: same repo `RECONCILIATION.md`, `PUNCHLIST.md`

## License

MIT
