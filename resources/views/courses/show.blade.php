@extends('base')

@section('content')
  <h3>Course detail pagina</h3>
    <p>{{ $course->name }}</p>
    <p>{{ $course->description }}</p>
    <p>{{$course->docent}}</p>

@endsection
