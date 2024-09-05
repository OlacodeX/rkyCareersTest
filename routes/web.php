<?php

use App\Http\Controllers\Web\SearchJobsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('jobs.search');
});

Route::get('/jobs', SearchJobsController::class)->name('jobs.search');
