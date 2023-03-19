<?php
use App\Models\Todo;
use App\Models\Item;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/todos', function () {
	return Todo::all();
});

Route::get('/todos/{id}', function ($id) {
	return Todo::with('items')->where('id', $id)->get();
});

Route::get('items/{id}', function ($id) {
	return Item::find($id);
});

Route::get('/items', function () {
	return Item::all();
});


Route::get('/login', function () {
    return view('login');
});

