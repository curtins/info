<?php

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
use App\Console\Commands;
use Illuminate\Filesystem\Filesystem;



Route::get('/dispatch/{times}', function( $times=1) {

$this->dispatchFrom('app\Console\Commands\LoadCommand);




});





Auth::routes();

