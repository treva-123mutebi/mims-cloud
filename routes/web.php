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
