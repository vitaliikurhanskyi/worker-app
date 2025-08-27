<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WorkerController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return "The video 7 is finish";
});

Route::get('/workers', [WorkerController::class, 'index'])->name('workers.index');

Route::get('/workers/{worker}', [WorkerController::class, 'show'])->name('workers.show');

// Route::get('/workers/create', [WorkerController::class, 'create'])->name('workers.create');

// Route::get('/workers/update', [WorkerController::class, 'update'])->name('workers.update');

// Route::get('/workers/delete', [WorkerController::class, 'delete'])->name('workers.delete');
