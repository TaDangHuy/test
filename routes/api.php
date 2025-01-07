<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StationMasterController;

Route::post('/stations-master', [StationMasterController::class ,'create']);
