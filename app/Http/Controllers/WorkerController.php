<?php

namespace App\Http\Controllers;

use App\Http\Requests\Worker\StoreRequest;
use App\Http\Requests\Worker\UpdateRequest;
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
        return view('worker.create');
    }

    public function store(StoreRequest $request) {
        $data = $request->validated();
        Worker::create($data);
        return redirect()->route('workers.index');
    }

    public function edit(Worker $worker) {
        return view('worker.edit', compact('worker'));
    }

    public function update(UpdateRequest $request, Worker $worker) {
        $data = $request->validated();
        $worker->update($data);
        return redirect()->route('workers.show', $worker->id);
    }

    public function delete($id) {
        $worker = Worker::findOrFail($id);
        $worker->delete();
        return redirect()->route('workers.index');
    }
}
