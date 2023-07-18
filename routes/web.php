<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
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

// Common Resource Routes;
// index: get and show all listings
// show: get and show a single listing
// create: show create form
// store: store listing
// edit: show edit form
// update: update listing
// destroy: destroy listing


Route::get('/', [ListingController::class, 'index']);

// Route::get('/', function () {
//     return view('listings', [
//         'gigs' => Listing::all(),
//     ]);
// });

Route::get('/listings/create', [ListingController::class, 'create'])->middleware('auth');

Route::post('/listings', [ListingController::class, 'store'])->middleware('auth');

Route::get('/listings/manage', [ListingController::class, 'manage'])->middleware('auth');

Route::get('/listings/{gig}/edit', [ListingController::class, 'edit'])->middleware('auth');

Route::put('/listings/{gig}', [ListingController::class, 'update'])->middleware('auth');

Route::delete('/listings/{gig}', [ListingController::class, 'destroy'])->middleware('auth');

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

Route::get('/register', [AuthController::class, 'create'])->middleware('guest');

Route::post('/users', [AuthController::class, 'store']);

Route::get('/login', [AuthController::class, 'login'])->name('login')->middleware('guest');

Route::post('/users/authenticate', [AuthController::class, 'authenticate']);

Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth');
