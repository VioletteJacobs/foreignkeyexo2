<?php

use App\Http\Controllers\ColorController;
use App\Http\Controllers\VoitureController;
use App\Models\Color;
use App\Models\Voiture;
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
    $DBVoiture = new Voiture;
    $DBColor = new Color;
    return  view ("welcome", compact("DBVoiture", "DBColor"));
});
Route::resource('voitures', VoitureController::class);
Route::resource('colors', ColorController::class);
