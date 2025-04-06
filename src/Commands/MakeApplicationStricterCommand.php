<?php

namespace Kauffinger\Stricter\Commands;

use Illuminate\Console\Command;

class MakeApplicationStricterCommand extends Command
{
    public $signature = 'stricter:setup';

    public $description = 'Make your application stricter';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
