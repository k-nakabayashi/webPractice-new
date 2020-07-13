<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use PHPJasper\PHPJasper;

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
    // $o = [];
    // exec('java -version', $o);
    // // // $jasper = new PHPJasper();
    // // // $input = storage_path('pdf/test.pdf');
    // $jasper = app(PHPJasper::class);

    // $input = base_path('vendor').'/geekcom/phpjasper-laravel/examples/hello_world_params.jrxml';
    // $jasper = new PHPJasper;
    // $jasper->compile($input)->execute();
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
