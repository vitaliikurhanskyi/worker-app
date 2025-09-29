<?php

namespace App\Console\Commands;

use App\Models\Avatar;
use App\Models\Client;
use App\Models\Department;
use App\Models\Position;
use App\Models\Worker;
//use App\Models\Profile;
use App\Models\Project;
use App\Models\Review;
use App\Models\Tag;
//use App\Models\ProjectWorker;
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
		// $this->prepareData();

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



		// $this->prepareManyToMany();

		// $project = Project::find(1);
		// $projectWorkers = ProjectWorker::where('project_id', $project->id)->get();
		// $workerIds = $projectWorkers->pluck('worker_id')->toArray();
		// $workers = Worker::whereIn('id', $workerIds)->get();
		// dd($workers->toArray());
		// dd($project->workers->toArray());
		// $worker = Worker::find(7);
		// dd($worker->projects->toArray());


		// $worker = Worker::find(1);
		// $project = Project::find(1);
		// $worker->projects()->attach($project->id);
		// $worker->projects()->toggle($project->id);

		//for example
		// $project->workers()->attach(array());
		// $project->workers()->detach();
		// $project->workers()->sync();
		// $worker->projects()->toggle($project->id);


		// 22. Отношение один к одному через //

		// $department = Department::find(1);
		// $positionBoss = Position::where('department_id', $department->id)->where('title', 'Boss')->first();
		// $worker = Worker::where('position_id', $positionBoss->id)->first();
		// dd($worker);

		// dd($department->boss);

		// $worker = Worker::find(7);
		// dd($worker->position->department);



		// 23. Отношение один ко многим через //

		// $department = Department::find(2);
		// dd($department->workers->toArray());

		// $worker = Worker::find(9);
		// dd($worker->position->department->toArray());




		// 24. Отношения с конвенцией Laravel
		// $this->prepareData();
		// $this->prepareManyToMany();

		//$worker = Worker::find(4);
		// dd($worker->profile->toArray());
		//dd($worker->projects->toArray());




		// 25. Отношение один к одному полиморф
		// $this->prepareData();
		// $this->prepareManyToMany();

		// $worker = Worker::find(5);
		// $worker->avatar()->create([
		// 	'path' => 'some path'
		// ]);

		// $client = Client::find(2);
		// $client->avatar()->create([
		// 	'path' => 'client path'
		// ]);

		// $avatar = Avatar::find(2);
		// dd($avatar->avatarable->toArray());





		// 26. Отношение один ко многим полиморф
		// $this->prepareData();
		// $this->prepareManyToMany();

		// $worker = Worker::find(5);
		// $client = Client::find(2);

		// $worker->reviews()->create([
		// 	'body' => 'review 1'
		// ]);

		// $worker->reviews()->create([
		// 	'body' => 'review 2'
		// ]);

		// $worker->reviews()->create([
		// 	'body' => 'review 3'
		// ]);

		// $client->reviews()->create([
		// 	'body' => 'review 1'
		// ]);

		// $client->reviews()->create([
		// 	'body' => 'review 2'
		// ]);

		// $client->reviews()->create([
		// 	'body' => 'review 3'
		// ]);

		// //dd($worker->reviews->toArray());

		// $review = Review::find(1);
		// dd($review->reviewable->toArray());





		
		
		
		// 27. Отношение многие ко многим полиморф
		// Tag::create([
		// 	'title' => 'tag 1'
		// ]);

		// Tag::create([
		// 	'title' => 'tag 2'
		// ]);

		// Tag::create([
		// 	'title' => 'tag 3'
		// ]);

		// $worker = Worker::find(1);
		// $client = Client::find(2);
		// $worker->tags()->attach([1, 3]);
		// $client->tags()->attach([2, 3]);

		// $tag = Tag::find(3);
		// dd($tag->workers->toArray());





		// 28. Отношения с сортировкой или выборкой
		// $position = Position::first();
		// dump($position->maxAgeWorker->toArray());
		// dd($position->minAgeWorker->toArray());
		
		// $position = Position::find(3);
		// dd($position->queryWorkerByName->toArray());





		// 32. Событие обновления
		$worker = Worker::find(1);
		$worker->update([
			//'name' => 'Updated name Alex',
			'age' => '29.000'
		]);





		return 0;
	}

	public function prepareData()
	{

		Client::create([
			'name' => 'Bob'
		]);

		Client::create([
			'name' => 'John'
		]);

		Client::create([
			'name' => 'Elena'
		]);


		$department1 = Department::create([
			'title' => 'IT'
		]);

		$department2 = Department::create([
			'title' => 'Analitics'
		]);

		$position1 = Position::create([
			'title' => 'developer',
			'department_id' => $department1->id
		]);

		$position2 = Position::create([
			'title' => 'manager',
			'department_id' => $department1->id
		]);

		$position3 = Position::create([
			'title' => 'designer',
			'department_id' => $department1->id
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
			// 'worker_id' => $worker1->id,
			'city' => 'Los Angeles',
			'skill' => 'Track Driver',
			'experiens' => 10,
			'finished_study_at' => '2025-06-01'
		];

		$profileData2 = [
			// 'worker_id' => $worker2->id,
			'city' => 'Denwer',
			'skill' => 'Developer PHP',
			'experiens' => 2,
			'finished_study_at' => '2025-06-09'
		];

		$profileData3 = [
			// 'worker_id' => $worker3->id,
			'city' => 'Milan',
			'skill' => 'Musician',
			'experiens' => 12,
			'finished_study_at' => '2025-01-01'
		];

		$profileData4 = [
			// 'worker_id' => $worker4->id,
			'city' => 'Lodz',
			'skill' => 'Manager',
			'experiens' => 12,
			'finished_study_at' => '2025-06-03'
		];

		$profileData5 = [
			// 'worker_id' => $worker5->id,
			'city' => 'Berlin',
			'skill' => 'Designer',
			'experiens' => 14,
			'finished_study_at' => '2025-02-01'
		];

		$profileData6 = [
			// 'worker_id' => $worker6->id,
			'city' => 'San Fran',
			'skill' => 'Front-end developer',
			'experiens' => 14,
			'finished_study_at' => '2025-02-01'
		];

		$profileData7 = [
			// 'worker_id' => $worker7->id,
			'city' => 'Ney York',
			'skill' => 'Front-end developer',
			'experiens' => 14,
			'finished_study_at' => '2025-02-01'
		];
		
		//$profile1 = Profile::create($profileData1);
		// $profile2 = Profile::create($profileData2);
		// $profile3 = Profile::create($profileData3);
		// $profile3 = Profile::create($profileData4);
		// $profile3 = Profile::create($profileData5);
		// $profile3 = Profile::create($profileData6);
		// $profile3 = Profile::create($profileData7);
		$worker1->profile()->create($profileData1);
		$worker2->profile()->create($profileData2);
		$worker3->profile()->create($profileData3);
		$worker4->profile()->create($profileData4);
		$worker5->profile()->create($profileData5);
		$worker6->profile()->create($profileData6);
		$worker7->profile()->create($profileData7);

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

		// ProjectWorker::create([
		// 	'project_id' => $project1->id,
		// 	'worker_id' => $workerManager->id
		// ]);

		// ProjectWorker::create([
		// 	'project_id' => $project1->id,
		// 	'worker_id' => $workerBackend->id
		// ]);

		// ProjectWorker::create([
		// 	'project_id' => $project1->id,
		// 	'worker_id' => $workerDesigner1->id
		// ]);

		// ProjectWorker::create([
		// 	'project_id' => $project1->id,
		// 	'worker_id' => $workerFrontEnd1->id
		// ]);

		// Project 2

		// ProjectWorker::create([
		// 	'project_id' => $project2->id,
		// 	'worker_id' => $workerManager->id
		// ]);

		// ProjectWorker::create([
		// 	'project_id' => $project2->id,
		// 	'worker_id' => $workerBackend->id
		// ]);

		// ProjectWorker::create([
		// 	'project_id' => $project2->id,
		// 	'worker_id' => $workerDesigner2->id
		// ]);

		// ProjectWorker::create([
		// 	'project_id' => $project2->id,
		// 	'worker_id' => $workerFrontEnd2->id
		// ]);

		$project1->workers()->attach([
			$workerManager->id,
			$workerBackend->id,
			$workerDesigner1->id,
			$workerFrontEnd1->id
		]);

		$project2->workers()->attach([
			$workerManager->id,
			$workerBackend->id,
			$workerDesigner2->id,
			$workerFrontEnd2->id
		]);
	}
}
