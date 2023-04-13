@extends('base')

@section('content')
    <h3>Nieuw Lokaal aanmaken</h3>
    <form action="/lokalen" method="POST">
        @csrf
        <div class="form-group">
            <label for="klaslokaal">Naam klaslokaal</label>
            <input class="form-control" type="text" name="name" id="klaslokaal">
        </div>

        <div class="form-group">
            <label for="">Verdieping</label>
            <input class="form-control" type="text" name="floor" id="">
        </div>

        <div class="form-group">
            <label for="">Capaciteit</label>
            <input class="form-control" type="number" name="capacity" id="">
        </div>

        <div class="form-group">
            <label for="">Scherm aanwezig?</label>
            <input class="form-control-checkbox" type="checkbox" name="has_screen" id="">
        </div>

        <input class="btn btn-primary" type="submit" value="Lokaal Opslaan">

    </form>
@endsection
