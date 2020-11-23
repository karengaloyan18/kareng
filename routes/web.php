<?php

use App\Http\Controllers\Aboutcontroller;
use App\Http\Controllers\Addaboutcontroller;
use App\Http\Controllers\Addabouttextcontroller;
use App\Http\Controllers\Addfactscontroller;
use App\Http\Controllers\Addservicecontroller;
use App\Http\Controllers\Addworkcontroller;
use App\Http\Controllers\Editaboutcontroller;
use App\Http\Controllers\Editabouttextcontroller;
use App\Http\Controllers\Editfactscontroller;
use App\Http\Controllers\Editservicecontroller;
use App\Http\Controllers\Editworkcontroller;
use App\Http\Controllers\Factscontroller;
use App\Http\Controllers\Indexcontroller;
use App\Http\Controllers\Servicecontroller;
use App\Http\Controllers\Workcontroller;
use Illuminate\Support\Facades\Route;

Route::match(['get', 'post'], '/', [Indexcontroller::class, 'index'])->name('index');

Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('/', function () {
        $data = ['title' => 'ADMIN PANEL'];
        return view('admin.index', $data);
    })->name('admin');


    Route::prefix('service')->group(function () {
        Route::get('/', [Servicecontroller::class, 'index'])->name('service');
        Route::match(['get', 'post'], '/add', [Addservicecontroller::class, 'index'])->name('addservice');
        Route::match(['get', 'post', 'delete'], '/edit{service}', [Editservicecontroller::class, 'index'])->name('editservice');
    });
    Route::prefix('about')->group(function () {
        Route::get('/', [Aboutcontroller::class, 'index'])->name('about');
        Route::match(['get', 'post'], '/add', [Addaboutcontroller::class, 'index'])->name('addabout');
        Route::match(['get', 'post'], '/addtext', [Addabouttextcontroller::class, 'index'])->name('addabouttext');
        Route::match(['get', 'post', 'delete'], '/edit{about}', [Editaboutcontroller::class, 'index'])->name('editabout');
        Route::match(['get', 'post', 'delete'], '/improve{text}', [Editabouttextcontroller::class, 'index'])->name('editabouttext');
    });
    Route::prefix('fact')->group(function () {
        Route::get('/', [Factscontroller::class, 'index'])->name('facts');
        Route::match(['get', 'post'], '/add', [Addfactscontroller::class, 'index'])->name('addfact');
        Route::match(['get', 'post', 'delete'], '/edit{fact}', [Editfactscontroller::class, 'index'])->name('editfact');
    });
    Route::prefix('work')->group(function () {
        Route::get('/', [Workcontroller::class, 'index'])->name('work');
        Route::match(['get', 'post'], '/add', [Addworkcontroller::class, 'index'])->name('addwork');
        Route::match(['get', 'post', 'delete'], '/edit{work}', [Editworkcontroller::class, 'index'])->name('editwork');
    });
});


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
