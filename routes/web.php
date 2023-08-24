<?php

use App\Models\Todo;
use App\Models\Item;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a goup which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('addTodo');
// });

// Route::post('/todos', [TodoController::class, 'store'])->name('todos.store');





Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

Route::group(['middleware' => 'auth'], function () {
    // Routes that require authentication
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/todos/{todo}/items', [ItemController::class, 'index'])->name('items.index');
    Route::get('/todos', [TodoController::class, 'index'])->name('todos.index');


    // Resources
    Route::resource('todos', TodoController::class)->except(['index']);
    Route::resource('todos', TodoController::class)->except(['index']);
    Route::resource('todos.items', ItemController::class)->except(['index', 'show']);
});



// Route::get('/todos', function () {
//     return Todo::all();
// });

// Route::get('/todos/{id}', function ($id) {
//     return Todo::with('items')->where('id', $id)->get();
// });

// Route::get('items/{id}', function ($id) {
//     return Item::find($id);
// });

// Route::get('/items', function () {
//     return Item::all();
// });


// Route::get('/login', function () {
//     return view('login');
// });
