<?php

namespace Elshaden\LivewireUsermgt\Commands;

use Illuminate\Console\Command;

class LivewireUsermgtCommand extends Command
{
    public $signature = 'livewire-usermgt';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
