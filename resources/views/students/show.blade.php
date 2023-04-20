@extends('base')

@section('content')
    <h3>Student detail pagina</h3>
    <p>{{ $student->voornaam }}</p>
    <p>{{ $student->tussenvoegsel }} {{ $student->achternaam }}</p>
    <dt>Klas:</dt>
    <dd>{{$student->klas}}</dd>

    <dt>Mentor:</dt>
    <dd>{{$student->mentor }}</dd>
@endsection
