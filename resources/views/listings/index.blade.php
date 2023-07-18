@extends('layout')

@section('content')

@include('partials._hero')
@include('partials._search')

<div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">

@if(empty($gigs))
    <p>No listings found.</p>
@endif

@foreach ($gigs as $gig)
    <x-listing-card :gig="$gig" />
@endforeach

@endsection