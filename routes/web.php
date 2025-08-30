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
    return "The video 10 is finish <div><a href=\"/workers\">Go</a></div>";
});

Route::get('/workers', [WorkerController::class, 'index'])->name('workers.index');

Route::get('/workers/create', [WorkerController::class, 'create'])->name('workers.create');

Route::get('/workers/{worker}', [WorkerController::class, 'show'])->name('workers.show');

Route::post('/workers', [WorkerController::class, 'store'])->name('workers.store');

Route::get('/workers/{worker}/edit', [WorkerController::class, 'edit'])->name('workers.edit');

Route::patch('/workers/{worker}', [WorkerController::class, 'update'])->name('workers.update');

Route::delete('/workers/{worker}', [WorkerController::class, 'delete'])->name('workers.delete');
