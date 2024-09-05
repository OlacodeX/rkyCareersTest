<?php

use App\Http\Controllers\Api\GetJobListingsController;
use Illuminate\Support\Facades\Route;

Route::get('/jobs/{title?}/{location?}/{category?}', GetJobListingsController::class);
