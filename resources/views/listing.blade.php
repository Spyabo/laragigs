@extends('layout')

@section('content')

@include('partials._search')

<h2>{{$gig['title']}}</h2>

<p>{{$gig['description']}}</p>

@endsection