<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    //get and show all listings
    public function index()
    {
        return view('listings/index', [
            'gigs' => Listing::latest()->filter(request(['tag']))->get()
        ]);
    }

    //get and show a single listing
    public function show(Listing $gig)
    {
        return view('listings/show', [
            'gig' => $gig,
        ]);
    }
}
