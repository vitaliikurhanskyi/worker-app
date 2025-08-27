<?php

namespace App\Http\Controllers;

use App\Models\Worker;
use Illuminate\Http\Request;

class WorkerController extends Controller
{
    public function index() {
        $workers = Worker::all();
        //dd($workers);
        // foreach($workers as $worker) {
        //     dump($worker->name);
        // }
        return view('worker.index', compact('workers'));
    }

    public function show(Worker $worker) {
        return view('worker.show', compact('worker'));
    }

    public function create() {
        $worker = [
            'name' => 'John2',
            'surname' => 'Dou2',
            'email' => 'test2@test.com',
            'age' => 34,
            'description' => 'test description',
            'is_married' => false
        ];

        Worker::create([
            'name' => $worker['name'],
            'surname' => $worker['surname'],
            'email' => $worker['email'],
            'age' => $worker['age'],
            'description' => $worker['description'],
            'is_married' => $worker['is_married']
        ]);
        return 'Worker was created';
    }

    public function update() {
        $worker = Worker::find(1);
        $worker->update([
            'name' => 'Karel',
            'surname' => 'Ivano'
        ]);
        return 'Was updated';
    }

    public function delete() {
        $worker = Worker::find(1);
        $worker->delete();
        return "wanker was delete";
    }
}
