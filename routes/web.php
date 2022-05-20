<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/1', function () {
    return view('sample');
});
Route::get('/home/social-media-share', 'SocialShareButtonsController@index');
Route::get('/social-media-share/{id}', 'SocialShareButtonsController@ShareWidget');

Route::get('/home', 'TypeaheadController@index');
Route::get('/autocomplete-search', 'TypeaheadController@autocompleteSearch');
Route::get('my-post', 'PostController@myPost');

//--------------------------------------
Route::get('/tryit', function () {
    $array = array('name' => 'bar');
    $array = Arr::add($array,'price', '123');
    $array = Arr::add($array,'name' , 'Desk', 'price', 100);
    // dd($array);
    // return $array;
    $matrix = Arr::crossJoin([1, 2], ['a', 'b']);
    $matrix = Arr::crossJoin([1, 2], ['a', 'b'], ['I', 'II']);
    return($matrix);

    
});