@extends('layouts.mainLayout')

@section('content')
<p>Questo e' l'elenco dei 100 migliori ristoranti del Mondo:</p>
<ul>
  @foreach ($ristoranti as $ristorante)
    <li>Nome ristorante:
      <a href="{{route('showRistorante', $ristorante['id'])}}">
        {{$ristorante['name']}}
      </a>
    </li>
  @endforeach
</ul>
@endsection
