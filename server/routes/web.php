<?php

use App\Http\Controllers\WelcomeController;

Route::get('', [WelcomeController::class, 'index']);
