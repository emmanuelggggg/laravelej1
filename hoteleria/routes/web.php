<?php

use Illuminate\Support\Facades\Route;

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

Rout::get('/saludo/',function () {
    return "Hola";
});

Rout::get('/saludo/{nombre}/',function ($name) {
    return "Hola".$name;
});

Rout::get('/suma/{num1}/{num2}/'.function ($num1,$num2) {
    return "Suma".$num1 +$num2;
})->where(['num1'=> '[0-9]+','num2'=> '[0-9]+']);

Rout::get('/multi/{num1}/{num2}/{num3?}'.function ($num1,$num2,$num3 =1) {

    return "Suma".$num1 *$num2 * $num3;

})->where(['num1'=> '[0-9]+','num2'=> '[0-9]+','num3'=> '[0-9]+']);