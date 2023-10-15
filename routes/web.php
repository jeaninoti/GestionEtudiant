<?php

use App\Http\Controllers\studentController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\GradeController;
use App\Http\Controllers\StudentController as ControllersStudentController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
Route::prefix('student')->group(function () {
    Route::get('/etudiant', [StudentController::class, 'home'])->name('etudiant');
    Route::get('/create', [StudentController::class, 'index'])->name('create');
    Route::post('/store', [StudentController::class, 'store'])->name('store');
    Route::get('/show/{student}', [StudentController::class, 'show'])->name('show');
    Route::get('/edit/{id}', [StudentController::class, 'edit'])->name('edit');
    Route::post('/editstore/{id}', [StudentController::class, 'editstore'])->name('editstore');
    Route::get('/search',[StudentController::class,'search'])->name('search');
    Route::get('/delete/{id}', [StudentController::class, 'delete'])->name('delete');
    Route::delete('/deletestore/{id}', [StudentController::class, 'deletestore'])->name('deletestore');
});
Route::prefix('course')->group(function(){
Route::get('/home',[CourseController::class,'homecour'])->name('home');
Route::get('/add',[CourseController::class,'add'])->name('add');
Route::post('/store',[CourseController::class,'addstore'])->name('store');
Route::get('/update/{id}',[CourseController::class,'editcour'])->name('update');
Route::post('/courpost/{id}', [CourseController::class, 'courpost'])->name('courpost');
Route::get('/view/{course}', [CourseController::class, 'viewcour'])->name('view');
Route::delete('/supprime/{id}', [CourseController::class, 'del'])->name('supprime');

});
Route::prefix('note')->group(function(){
Route::get('note',[GradeController::class,'note'])->name('note');

});