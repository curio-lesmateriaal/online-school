@extends('base')

@section('content')
    <h3>Lokalen detail pagina</h3>
    <p>Naam: {{$lokaal->name}}</p>
    <p>Verdieping: {{ $lokaal->floor }}</p>
    <p>Capaciteit: {{$lokaal->capacity}}</p>
    <p>Scherm aanwezig: {{ $lokaal->has_screen ? 'Ja' : 'Nee' }}</p>

@endsection
