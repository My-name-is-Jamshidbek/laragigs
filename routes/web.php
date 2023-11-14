<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;
use App\Http\Controllers\ListingController;

// Home page
Route::get('/', [ListingController::class, 'index']);

// All listings
Route::get('/listings', [ListingController::class, 'index']);

// Create listing
Route::get('/listings/create', [ListingController::class, 'showCreate']);

// Store listing data
Route::post('/listings', [ListingController::class, 'store']);

// Single listing
Route::get('/listings/{listing}', [ListingController::class, 'show']);