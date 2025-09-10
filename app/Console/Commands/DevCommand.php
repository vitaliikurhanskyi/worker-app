<?php

namespace App\Console\Commands;

use App\Models\Position;
use App\Models\Worker;
use App\Models\Profile;
use Illuminate\Console\Command;

class DevCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'my:develop';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'My dev command';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        //$this->prepareData();

        // $profile = Profile::find(1);
        // $worker = Worker::find($profile->worker_id);
        // dd($worker->toArray());

        // $worker = Worker::find(1);
        // $profile = Profile::where('worker_id', $worker->id)->first();
        // dd($profile->toArray());

        // $profile = Profile::find(1);

        // dump($profile->worker->toArray());

        // $worker = Worker::find(1);

        // dd($worker->profile->toArray());

        // $position = Position::find(1);
        // $workers = Worker::where('position_id', $position->id)->get();
        // dd($workers->toArray());

        // $workers = Worker::whereIn('id', [1,3])->get();
        // $workerPositionId = $workers->pluck('position_id')->unique();
        // $positionName = Position::find($workerPositionId[0]);
        // dump($positionName->title);
        // $positionsArray = Position::whereIn('id', $workerPositionId)->get();
        // dd($positionsArray->toArray());

        $worker = Worker::find(1);
        dump($worker->position->title);
        $position = Position::find(1);
        dump($position->workers);
        return 0;
    }

    public function prepareData() 
    {

        $position1 = Position::create([
            'title' => 'developer'
        ]);

        $position2 = Position::create([
            'title' => 'manager'
        ]);

        $workerData1 = [
            'position_id' => $position1->id,
            'name' => 'Ivan',
            'surname' => 'Ivanov',
            'email' => 'mail@gmail.com',
            'age' => 30,
            'description' => 'Some description',
            'is_married' => 0
        ];

        $workerData2 = [
            'position_id' => $position2->id,
            'name' => 'John',
            'surname' => 'Doge',
            'email' => 'john@gmail.com',
            'age' => 35,
            'description' => 'Some description',
            'is_married' => 0
        ];

        $workerData3 = [
            'position_id' => $position2->id,
            'name' => 'Den',
            'surname' => 'Stone',
            'email' => 'stone@gmail.com',
            'age' => 39,
            'description' => 'ableton developer',
            'is_married' => 1
        ];

        $worker1 = Worker::create($workerData1);
        $worker2 = Worker::create($workerData2);
        $worker3 = Worker::create($workerData3);

        $profileData1 = [
            'worker_id' => $worker1->id,
            'city' => 'Los Angeles',
            'skill' => 'Track Driver',
            'experiens' => 10,
            'finished_study_at' => '2025-06-01'
        ];

        $profileData2 = [
            'worker_id' => $worker2->id,
            'city' => 'Denwer',
            'skill' => 'Developer PHP',
            'experiens' => 2,
            'finished_study_at' => '2025-06-01'
        ];

        $profileData3 = [
            'worker_id' => $worker3->id,
            'city' => 'Milan',
            'skill' => 'Musician',
            'experiens' => 12,
            'finished_study_at' => '2025-06-01'
        ];

        $profile1 = Profile::create($profileData1);
        $profile2 = Profile::create($profileData2);
        $profile3 = Profile::create($profileData3);

        return Command::SUCCESS;
    }
}
