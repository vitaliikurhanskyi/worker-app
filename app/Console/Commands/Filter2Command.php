<?php

namespace App\Console\Commands;

use App\Http\Filters\Var2\Worker\Age;
use App\Http\Filters\Var2\Worker\From;
use App\Http\Filters\Var2\Worker\Name;
use App\Http\Filters\Var2\Worker\To;
use App\Models\Worker;
use Illuminate\Console\Command;
use Illuminate\Pipeline\Pipeline;

class Filter2Command extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:filter2';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Test Filter 2';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {

		request()->merge([
			// 'age' => 22,
			//'name' => 'Pedro',
			'from' => 50,
		]);

		$workers = app()->make(Pipeline::class)
					->send(Worker::query())
					->through([
						Age::class,
						Name::class,
						From::class,
						To::class,
					])
					->thenReturn();

		dd($workers->get());

        return Command::SUCCESS;
    }
}
