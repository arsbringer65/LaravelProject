<?php
use App\Models\Todo;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
	return view('todo', [
		'todos' => Todo::all()
	]);

});
Route::get('/items', function () {
	return view('todo', [
		'todos' => Todo::all()
	]);

});
Route::get('/login', function () {
    return view('login');
});

