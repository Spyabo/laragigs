<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ListingController extends Controller
{
    //get and show all listings
    public function index()
    {
        return view('listings/index', [
            'gigs' => Listing::latest()->filter(request(['tag', 'search']))->paginate(6)
        ]);
    }

    //get and show a single listing
    public function show(Listing $gig)
    {
        return view('listings/show', [
            'gig' => $gig,
        ]);
    }

    //show create form
    public function create()
    {
        return view('listings/create');
    }

    //store listing
    public function store()
    {
        //validate
        $validated = request()->validate([
            'title' => 'required',
            'company' => ['required', Rule::unique('listings', 'company')],
            'location' => 'required',
            'website' => 'required',
            'email' => ['required', 'email'],
            'tags' => 'required',
            'description' => 'required',
        ]);

        if (request()->hasFile('logo')) {
            $validated['logo'] = request()->file('logo')->store('logos', 'public');
        }

        //store
        Listing::create($validated);

        //redirect
        return redirect('/')->with('form_success', 'Listing created successfully');
    }
}
