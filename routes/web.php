<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AssetController;

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

/*
Route::get('/', function () {
    return view('welcome');
});

Common routing pattern.

Route::get('/conferences/{id}', function($id){
    $conference = Conference::findorFail($id);
});
 1. implicit route model binding.
 Route::get('conference/{conference}', function(Conference $conference){
    return view('conferences.show')->with('conference', $conference);

 });
2. Explicit route model binding.
. 1 edit the the App\Providers\RouteServiceProvider boot method then apply it like so.
Route::get('events/{event}', function (Conference $event)
 { return view('events.show')->with('event', $event);
});
*/

Route::get('/', [AssetController::class, 'hello']);
Route::post('assets', [AssetController::class, 'store'] );

/**
 * Performing redirect.
 * 1. using the global helper to generate a redirect response.
 * Route::get('redirect-with-helper', function () { return redirect()->to('login');
*   });
* 2. Using the global helper shortcut
* Route::get('redirect-with-helper-shortcut', function () { return redirect('login');
* });
* 3. Using the facade to generate a redirect response
*  Route::get('redirect-with-facade', function () { return Redirect::to('login');
*  });
* 4. Redirect to route.
* Route::get('redirect', function () {return redirect()->route('conferences.index');});
* 5. Redirect to route with parameters.
*  Route::get('redirect', function () { return redirect()->route('conferences.show', ['conference' => 99]);});
*/
