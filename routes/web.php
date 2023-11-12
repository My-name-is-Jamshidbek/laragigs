<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;

// Home page
Route::get('/', function () {
    return view('listings', [
        'heading' => 'Latest listings',
        'listings' => Listing::all(),
    ]);
});

// All listings
Route::get('/listings', function () {
    return view('listings', [
        'heading' => 'Latest listings',
        'listings' => Listing::all(),
    ]);
});

// Changed listing
Route::get('/listings/{id}', function ($id) {
    return view('listing', [
        'listing' => Listing::find($id),
    ]);
});