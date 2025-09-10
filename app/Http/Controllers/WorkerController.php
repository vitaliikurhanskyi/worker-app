<?php

namespace App\Http\Controllers;

use App\Http\Requests\Worker\IndexRequest;
use App\Http\Requests\Worker\StoreRequest;
use App\Http\Requests\Worker\UpdateRequest;
use App\Models\Worker;
use Illuminate\Http\Request;

class WorkerController extends Controller
{
    public function index(IndexRequest $filter) 
    {
        $data = $filter->validated();

        $workerQuery = Worker::query();

        if(isset($data['name'])) {
            $workerQuery->where('name', 'like', "%{$data['name']}%");
        }

        if(isset($data['surname'])) {
            $workerQuery->where('surname', 'like', "%{$data['surname']}%");
        }

        if(isset($data['email'])) {
            $workerQuery->where('email', 'like', "%{$data['email']}%");
        }

        if(isset($data['from'])) {
            $workerQuery->where('age', '>', $data['from']);
        }

        if(isset($data['to'])) {
            $workerQuery->where('age', '<', $data['to']);
        }

        if(isset($data['description'])) {
            $workerQuery->where('description', 'like', "%{$data['description']}%");
        }

        if(isset($data['is_married'])) {
            $workerQuery->where('is_married', '=', $data['is_married']);
            //dump($data['is_married']);
        }

        $workers = $workerQuery->paginate(4);

        //$workers = Worker::paginate(4);
        return view('worker.index', compact('workers'));
    }

    public function show(Worker $worker)
    {
        return view('worker.show', compact('worker'));
    }

    public function create()
    {
        return view('worker.create');
    }

    public function store(StoreRequest $request) 
    {
        $data = $request->validated();

        Worker::create($data);

        return redirect()->route('workers.index');
    }

    public function edit(Worker $worker) 
    {
        return view('worker.edit', compact('worker'));
    }

    public function update(UpdateRequest $request, Worker $worker) 
    {
        $data = $request->validated();

        $worker->update($data);

        return redirect()->route('workers.show', $worker->id);
    }

    public function delete($id) 
    {
        $worker = Worker::findOrFail($id);

        $worker->delete();

        return redirect()->route('workers.index');
    }
}
