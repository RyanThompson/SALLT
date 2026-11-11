<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

/**
 * Stub for the SALLT create-project TUI.
 *
 * Full tree will live in streams/sdk and ask discovery questions, then run
 * KindRegistry recipes. This command documents the intended flow until then.
 */
class SalltOnboard extends Command
{
    protected $signature = 'sallt:onboard
                            {--defaults : Accept the default (minimal) recipe without prompts}
                            {--kitchen-sink : Accept the kitchen-sink recipe without prompts}';

    protected $description = 'SALLT onboarding TUI — discover frontend/panel/tenancy, then generate';

    public function handle(): int
    {
        $this->components->info('🧂 SALLT — Streams · Alpine · Laravel · Livewire · Tailwind');
        $this->newLine();

        if ($this->option('kitchen-sink')) {
            $this->components->warn('Kitchen-sink recipe is not implemented yet (SDK TUI punch list).');
            $this->line('Intended: panel + API + Alpine + sample Todos domain + validate.');

            return self::SUCCESS;
        }

        if ($this->option('defaults') || ! $this->input->isInteractive()) {
            $this->components->warn('Default (minimal) recipe is not implemented yet.');
            $this->line('Intended: streams/core shell only; skip panel/API until you re-run onboard.');

            return self::SUCCESS;
        }

        $this->line('Onboarding tree (preview — answers are not persisted yet):');
        $this->newLine();

        $frontend = $this->confirm('Do you need a frontend (Alpine / Livewire surfaces)?', true);
        $panel = $this->confirm('Do you need a control panel?', true);
        $panels = $panel
            ? (int) $this->ask('How many panels?', '1')
            : 0;
        $tenancy = $this->confirm('Is this multi-tenant?', false);
        $api = $this->confirm('Do you need a REST API edge?', $frontend === false);
        $sample = $this->confirm('Scaffold a sample Todos domain (plumbing only)?', true);

        $this->newLine();
        $this->components->info('Recipe (not yet applied):');
        $this->table(
            ['Key', 'Value'],
            [
                ['frontend', $frontend ? 'yes' : 'no'],
                ['panels', (string) $panels],
                ['multi_tenancy', $tenancy ? 'yes' : 'no'],
                ['api', $api ? 'yes' : 'no'],
                ['sample_domain', $sample ? 'Todos' : '—'],
            ],
        );

        $this->newLine();
        $this->components->warn('Next: move this tree into streams/sdk and emit via streams:make recipes.');
        $this->line('Canon: packages/adr-sallt/adr/0001-salty-stack.md (reach order) · PUNCHLIST.md (generators).');

        return self::SUCCESS;
    }
}
