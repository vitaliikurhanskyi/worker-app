<?php

namespace App\Console\Commands;

use App\Jobs\SomeJob;
use Illuminate\Console\Command;

class JobCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:jobtest';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
		SomeJob::dispatch()->onQueue('some_queue');
        return 0;
    }
}
