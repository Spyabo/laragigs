<?php

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
        'gigs' => [
            [
                'id' => 1,
                'title' => 'PHP Developer',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni voluptatibus, voluptate voluptas? Nisi voluptate voluptas?',
            ],
            [
                'id' => 2,
                'title' => 'JS Developer',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni voluptatibus, voluptate voluptas? Nisi voluptate voluptas?',
            ],
            [
                'id' => 3,
                'title' => 'Rust Developer',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni voluptatibus, voluptate voluptas? Nisi voluptate voluptas?',
            ],
        ],
    ]);
});
