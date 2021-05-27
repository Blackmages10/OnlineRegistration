<?php

use App\Http\Controllers\Seminar\SeminarController;
use Illuminate\Support\Facades\Route;

Route::resource('seminar',SeminarController::class);
