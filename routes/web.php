<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\PremierLeagueController; 

Route::get('/', function () {
    return view('welcome');
});

// Route untuk mendapatkan semua tim 
Route::get('api/searchHotelDestination', [PremierLeagueController::class, 'searchHotelDestination']); 
