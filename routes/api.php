<?php

use Illuminate\Http\Request;

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
Route::get('noe_teams','NoeTeam@index');
Route::get('noe_team/{key}','NoeTeam@show');
Route::post('noe_team','NoeTeam@store')->name('reg');
Route::put('noe_team','NoeTeam@store');
Route::delete('noe_team/{key}','NoeTeam@store');