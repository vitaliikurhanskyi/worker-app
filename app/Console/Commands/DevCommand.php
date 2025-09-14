<?php

namespace App\Console\Commands;

use App\Models\Position;
use App\Models\Worker;
use App\Models\Profile;
use App\Models\Project;
use App\Models\ProjectWorker;
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

		// $worker = Worker::find(1);
		// dump($worker->position->title);
		// $position = Position::find(1);
		// dump($position->workers);

		//$this->prepareManyToMany();

		$project = Project::find(1);
		// $projectWorkers = ProjectWorker::where('project_id', $project->id)->get();
		// $workerIds = $projectWorkers->pluck('worker_id')->toArray();
		// $workers = Worker::whereIn('id', $workerIds)->get();
		// dd($workers->toArray());

		//dd($project->workers->toArray());

		$worker = Worker::find(7);

		dd($worker->projects->toArray());



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

		$position3 = Position::create([
			'title' => 'designer'
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

		$workerData4 = [
			'position_id' => $position3->id,
			'name' => 'John',
			'surname' => 'Corry',
			'email' => 'john@gmail.com',
			'age' => 19,
			'description' => 'web designer',
			'is_married' => 1
		];

		$workerData5 = [
			'position_id' => $position3->id,
			'name' => 'Lenox',
			'surname' => 'Storage',
			'email' => 'lenox@gmail.com',
			'age' => 19,
			'description' => 'c# developer',
			'is_married' => 0
		];

		$workerData6 = [
			'position_id' => $position3->id,
			'name' => 'Roman',
			'surname' => 'Dell',
			'email' => 'lenox@gmail.com',
			'age' => 89,
			'description' => 'embeded developer',
			'is_married' => 0
		];

		$workerData7 = [
			'position_id' => $position1->id,
			'name' => 'Jorge',
			'surname' => 'Lukash',
			'email' => 'lenox@gmail.com',
			'age' => 89,
			'description' => 'factory worker',
			'is_married' => 0
		];

		$worker1 = Worker::create($workerData1);
		$worker2 = Worker::create($workerData2);
		$worker3 = Worker::create($workerData3);
		$worker4 = Worker::create($workerData4);
		$worker5 = Worker::create($workerData5);
		$worker6 = Worker::create($workerData6);
		$worker7 = Worker::create($workerData7);

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
			'finished_study_at' => '2025-06-09'
		];

		$profileData3 = [
			'worker_id' => $worker3->id,
			'city' => 'Milan',
			'skill' => 'Musician',
			'experiens' => 12,
			'finished_study_at' => '2025-01-01'
		];

		$profileData4 = [
			'worker_id' => $worker4->id,
			'city' => 'Lodz',
			'skill' => 'Manager',
			'experiens' => 12,
			'finished_study_at' => '2025-06-03'
		];

		$profileData5 = [
			'worker_id' => $worker5->id,
			'city' => 'Berlin',
			'skill' => 'Designer',
			'experiens' => 14,
			'finished_study_at' => '2025-02-01'
		];

		$profileData6 = [
			'worker_id' => $worker6->id,
			'city' => 'San Fran',
			'skill' => 'Front-end developer',
			'experiens' => 14,
			'finished_study_at' => '2025-02-01'
		];

		$profileData7 = [
			'worker_id' => $worker7->id,
			'city' => 'Ney York',
			'skill' => 'Front-end developer',
			'experiens' => 14,
			'finished_study_at' => '2025-02-01'
		];

		$profile1 = Profile::create($profileData1);
		$profile2 = Profile::create($profileData2);
		$profile3 = Profile::create($profileData3);
		$profile3 = Profile::create($profileData4);
		$profile3 = Profile::create($profileData5);
		$profile3 = Profile::create($profileData6);
		$profile3 = Profile::create($profileData7);

		return Command::SUCCESS;
	}

	public function prepareManyToMany()
	{
		$workerManager = Worker::find(4);
		$workerBackend = Worker::find(2);
		$workerDesigner1 = Worker::find(5);
		$workerDesigner2 = Worker::find(3);
		$workerFrontEnd1 = Worker::find(6);
		$workerFrontEnd2 = Worker::find(7);

		$project1 = Project::create([
			'title' => 'Shop'
		]);

		$project2 = Project::create([
			'title' => 'Blog'
		]);

		// Project 1

		ProjectWorker::create([
			'project_id' => $project1->id,
			'worker_id' => $workerManager->id
		]);

		ProjectWorker::create([
			'project_id' => $project1->id,
			'worker_id' => $workerBackend->id
		]);

		ProjectWorker::create([
			'project_id' => $project1->id,
			'worker_id' => $workerDesigner1->id
		]);

		ProjectWorker::create([
			'project_id' => $project1->id,
			'worker_id' => $workerFrontEnd1->id
		]);

		// Project 2

		ProjectWorker::create([
			'project_id' => $project2->id,
			'worker_id' => $workerManager->id
		]);

		ProjectWorker::create([
			'project_id' => $project2->id,
			'worker_id' => $workerBackend->id
		]);

		ProjectWorker::create([
			'project_id' => $project2->id,
			'worker_id' => $workerDesigner2->id
		]);

		ProjectWorker::create([
			'project_id' => $project2->id,
			'worker_id' => $workerFrontEnd2->id
		]);
	}
}
