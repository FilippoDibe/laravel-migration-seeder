<?php
use App\Http\Controllers\TrainController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    return view('pages.index');
});
Route::get('/', [TrainController::class, 'index']);
