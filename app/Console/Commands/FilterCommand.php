<?php

namespace App\Console\Commands;

use App\Http\Filters\Var1\WorkerFilter;
use App\Models\Worker;
use Illuminate\Console\Command;

class FilterCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:filter1';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'My test filter command';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
		$workerQuery = Worker::query();

		$filter = new WorkerFilter([
			'from' => 35,
			'to' => 50,
		]);

		$filter->applyFilter($workerQuery);

		dd($workerQuery->get()->toArray());

        return Command::SUCCESS;
    }
}
