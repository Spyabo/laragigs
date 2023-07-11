@extends('layout')

@section('content')

<h1>{{($heading)}}</h1>

@if(empty($gigs))
    <p>No listings found.</p>
@endif

@foreach ($gigs as $gig)
    <h2><a href="/listings/{{$gig['id']}}">{{$gig['title']}}</a></h2>
    <p>{{$gig['description']}}</p>
@endforeach

@endsection