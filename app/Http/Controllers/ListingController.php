<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    //get and show all listings
    public function index()
    {
        return view('listings', [
            'gigs' => Listing::all(),
        ]);
    }

    //get and show a single listing
    public function show(Listing $gig)
    {
        return view('listing', [
            'gig' => $gig,
        ]);
    }
}
