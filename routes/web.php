<?php

use App\Models\Listing;
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
        'heading' => 'Listings',
        'gigs' => Listing::all(),
    ]);
});

// Route::get('/listings/{id}', function ($id) {
//     return view('listing', [
//         'heading' => 'Listing',
//         'gig' => Listing::find($id),
//     ]);
// });

Route::get('/listings/{gig}', function (Listing $gig) {
    return view('listing', [
        'gig' => $gig,
    ]);
});
