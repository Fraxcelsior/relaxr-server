<?php

use Illuminate\Http\Request;
use App\JournalController;

Route::get('journals', 'JournalController@index');
Route::get('journals/{journal}', 'JournalController@show');
Route::post('journals', 'JournalController@store');
Route::put('journals/{journal}', 'JournalController@update');
Route::delete('journals/{journal}', 'JournalController@delete');

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
