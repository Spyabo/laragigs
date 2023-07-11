<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListingController;

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

Route::get('/', [ListingController::class, 'index']);

// Route::get('/', function () {
//     return view('listings', [
//         'gigs' => Listing::all(),
//     ]);
// });

Route::get('/listings/{gig}', [ListingController::class, 'show']);

// // Route::get('/listings/{id}', function ($id) {
// //     return view('listing', [
// //         'heading' => 'Listing',
// //         'gig' => Listing::find($id),
// //     ]);
// // });

// Route::get('/listings/{gig}', function (Listing $gig) {
//     return view('listing', [
//         'gig' => $gig,
//     ]);
// });
