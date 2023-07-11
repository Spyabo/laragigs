<h1>{{($heading)}}</h1>

@if(empty($gigs))
    <p>No listings found.</p>
@endif

@foreach ($gigs as $gig)
    <h2>{{$gig['title']}}</h2>
    <p>{{$gig['description']}}</p>
@endforeach
