<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

use App\Notifications\SubscriptionRenewalFailed;

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

// Route::get('/', function (Request $request) {

// 	// return session('name');
// 	// return session('foobar', 'A default');
// 	// session(['name' => 'JohnDoe']);
// 	// session()->forget('name');
// 	// $request->session()->put('foobar', 'baz');

// 	// return $request->session()->get('aafoobar', 'default');

// 	// $request->flash();

//     return view('welcome');

//     // $user = App\User::first();


//     // $user->notify(new SubscriptionRenewalFailed);

//     // return 'done';
// });

// function flash($message) {
// 	session()->flash('message', $message);
// }

Route::get('/', function () {

    return view('welcome');

});

Route::get('projects/create', function () {
	return view('projects.create');
});
Route::post('projects', function () {

	// session()->flash('message', 'Your project has been created.');
	flash('Your project has been created.');

	return redirect('/');
	// return redirect('/')->with('message', 'Your project has been created.');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
