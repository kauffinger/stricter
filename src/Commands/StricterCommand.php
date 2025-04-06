<?php

namespace Kauffinger\Stricter\Commands;

use Illuminate\Console\Command;

class StricterCommand extends Command
{
    public $signature = 'stricter';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
