<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('listings', [
        'heading' => 'Latest listings',
        'listings' => [
            [
                'id' => 0,
                'title' => 'Listing one',
                'description' => 'lorem ipsum dolor sit amet lore mauris vel'
            ],
            [
                'id' => 1,
                'title' => 'Listing two',
                'description' => 'lorem ipsum dolor sit amet lore mauris vel'
            ],
            [
                'id' => 2,
                'title' => 'Listing three',
                'description' => 'lorem ipsum dolor sit amet lore mauris vel'
            ]
        ]
    ]);
});