<?php

//use App\calculateAgeClass;
// use Illuminate\Http\Controllers\PostController;

use App\Models\Task;
use App\Models\User;
use App\Models\Artical;
//use App\Http\Controllers\PostController;
//use App\Http\Controllers\UserController;
//use App\Http\Controllers\Resource;
//use App\Http\Controllers\ServiceController;
use App\Models\Project;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ColController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SongController;
use App\Http\Controllers\Post1Controller;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\ResultController;
use App\Http\Controllers\SingerController;
use App\Http\Controllers\ArticalController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\TeacherController;

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
//age calculator

// app()->bind('ageCalculator', function () {
//     return new \App\calculateAgeClass();
// });

// Route::get('/', function (calculateAgeClass $calculateAgeClass) {
//     $calculateAgeClass->provide_birth_year(2000);
//     $age = $calculateAgeClass->get_age();
//     return $age;
// });

//Route model binding
//Route::get('/posts/{post}', [PostController::class, 'show']);
//basic controller
//Route::get("/users", [UserController::class, 'index']);
//basic controller with pass data
//Route::get('/getdata/{id}', [UserController::class, 'getdata']);
//Route::get('/getname/{name}', [UserController::class, 'getname']);
//Route::resource('user', Resource::class);
//Route::get('check/{age}', [UserController::class, 'checkAge']);

//Route::get('/', [ServiceController::class, 'show']);

//crud
// Route::get('/', [ResultController::class, 'index'])->name('index');
// Route::post('/', [ResultController::class, 'create'])->name('create');
// Route::get('/edit/{id}', [ResultController::class, 'edit'])->name('edit');
// Route::put('/edit/{id}', [ResultController::class, 'update'])->name('update');
// Route::get('/delete/{id}', [ResultController::class, 'destroy'])->name('destroy');
// Route::get('/req', [ResultController::class, 'updatereq'])->name('updatereq');
//Route::get('/search', [ResultController::class, 'search'])->name('search');
//collection
//Route::get('/', [ColController::class, 'index']);

//relationship
// Route::get('/', [\App\Http\Controllers\TestController::class, 'index']);

// Route::get('/', function () {
//     $project = Project::with('tasks')->get();
//     dd($project->toArray());
// $project = Project::create([
//     'title' => 'project c'

// ]);
// $user5 = User::create([
//     'name' => 'User5',
//     'email' => ' user5@exaple.com ',
//     'password' => Hash::make('password'),
//     'project_id' => $project->id
// ]);
// $user6 = User::create([
//     'name' => 'User6',
//     'email' => ' user6@exaple.com ',
//     'password' => Hash::make('password'),
//     'project_id' => $project->id
// ]);
// $task5 = Task::create([
//     'title' => 'Task 5 for project c by user 5',
//     'user_id' => $user5->id
// ]);
// $task6 = Task::create([
//     'title' => 'Task 6  for project c by user 6',
//     'user_id' => $user6->id
// ]);
//});
//many to many
// Route::get('/add_song', [SongController::class, 'add_song']);
// Route::get('/add_singer', [SingerController::class, 'add_singer']);
// Route::get('show-song/{id}', [SongController::class, 'show_song']);
// Route::get('show-singer/{id}', [SingerController::class, 'show_singer']);
//polymorphic
//one to many
// Route::get('/add_post', [PostController::class, 'add_post']);
// Route::get('/add_video', [VideoController::class, 'add_video']);

// Route::get('show-post/{id}', [PostController::class, 'show_post']);
// Route::get('show-video/{id}', [VideoController::class, 'show_video']);
//one to one
// Route::get('/add_post', [PostController::class, 'add_post']);
// Route::get('/add_video', [VideoController::class, 'add_video']);

// Route::get('show-post', [PostController::class, 'show_post']);
// Route::get('show-video', [VideoController::class, 'show_video']);

//many to many
Route::get('/add-student', [StudentController::class, 'add_student']);
Route::get('/add-subject', [SubjectController::class, 'add_subject']);
Route::get('add-teacher', [TeacherController::class, 'add_teacher']);
Route::get('show-student', [SubjectController::class, 'show_student']);
Route::get('show-teacher', [SubjectController::class, 'show_teacher']);
Route::get('/show-subject', [SubjectController::class, 'show_subject']);
