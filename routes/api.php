<?php

use Illuminate\Http\Request;
use App\Journal;

Route::get('journals', function() {
    // If the Content-Type and Accept headers are set to 'application/json', 
    // this will return a JSON structure. This will be cleaned up later.
    return Journal::all();
});
 
Route::get('journals/{id}', function($id) {
    return Journal::find($id);
});

Route::post('journals', function(Request $request) {
    return Journal::create($request->all);
});

Route::put('journals/{id}', function(Request $request, $id) {
    $journal = Journal::findOrFail($id);
    $journal->update($request->all());

    return $journal;
});

Route::delete('journals/{id}', function($id) {
    Journal::find($id)->delete();

    return 204;
});


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
