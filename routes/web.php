<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AgentController;

Route::get('/add-agent', [AgentController::class, 'storeAgent']);
