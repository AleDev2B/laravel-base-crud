@extends('layouts.mainLayout')

@section('content')
<p>

  Restaurant: {{$ristorante['name']}} <br>
  Owner:{{ $ristorante['owner']}} <br>
  Location:{{$ristorante['city']}} <br>
  Address:{{$ristorante['address']}} <br> {{$ristorante['postcode']}}
  Telephone:{{$ristorante['telephone']}} <br>
  Email:{{$ristorante['email']}} <br>
</p>

@endsection
