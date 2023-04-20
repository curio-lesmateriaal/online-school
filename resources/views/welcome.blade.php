@extends('base')

@section('content')
            <div class="row">
                <div class="courses col-4">
                    <h2>Vakken van de online school:</h2>
                    <ul class="list-group">
                        @foreach($courses as $course)
                            <li class="list-group-item"><a href="/courses/{{$course->id}}"> {{ $course->name }} - {{ $course->description }} </a> </li>
                        @endforeach
                    </ul>
                </div>

                <div class="lokalen col-8">
                    <h2>Lokalen van onze online school</h2>
                    <ul class="list-group">
                        @foreach($lokalen as $lokaal)
                            <li class="list-group-item">
                                {{ $lokaal->name }} - capaciteit: {{ $lokaal->capacity }} personen
                                <br>
                                @if ($lokaal->has_screen)
                                    scherm aanwezig
                                @endif
                            </li>
                        @endforeach
                    </ul>

                    <h2>Studenten van onze online school</h2>
                    <ul class="list-group">
                        @foreach($studenten as $student)
                            <li class="list-group-item"><a href="/students/{{$student->id}}">{{$student->voornaam}} {{ $student->tussenvoegsel }} {{ $student->achternaam }} - {{$student->nummer}}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
@endsection
