@extends('base')

    @section('content')
    <h3>Nieuw vak aanmaken</h3>

    <form action="/courses" method="POST">
        @csrf
        <div class="form-group">
            <label for="">Naam vak</label>
            <input class="form-control" type="text" name="name" id="">
        </div>

        <div class="form-group">
            <label for="">Naam Docent</label>
            <input class="form-control" type="text" name="docent" id="">
        </div>

        <div class="form-group">
            <label for="">Beschrijving</label>
            <textarea class="form-control" name="description" id="" cols="30" rows="10"></textarea>
        </div>

        <input class="btn btn-primary" type="submit" value="Vak aanmaken">
    </form>
    @endsection
