<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class TestCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'my:test';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'It\'s my test command';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        dump('The test command worked');
        return Command::SUCCESS;
    }
}
