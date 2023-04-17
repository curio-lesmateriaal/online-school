@extends('base')

@section('content')
    <h3>Nieuw Student aanmaken</h3>
    <form action="/students" method="POST">
        @csrf
        <div class="form-group">
            <label for="voornaam">Voornaam</label>
            <input type="text" name="voornaam" id="voornaam" class="form-control">
        </div>

        <div class="form-group">
             <label for="achternaam">Achternaam</label>
            <input type="text" name="achternaam" id="achternaam" class="form-control">
        </div>

        <div class="form-group">
             <label for="tussenvoegsel">Tussenvoegsel</label>
            <input type="text" name="tussenvoegsel" id="tussenvoegsel" class="form-control">
        </div>

        <div class="form-group">
            <label for="voornaam">Studentnummer</label>
            <input type="text" name="nummer" id="voornaam" class="form-control">
        </div>

        <div class="form-group">
            <label for="klas">Klas</label>
            <input type="text" name="klas" id="klas" class="form-control">
        </div>

         <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control">
        </div>

          <div class="form-group">
            <label for="mentor">Mentor</label>
            <input type="mentor" name="mentor" id="mentor" class="form-control">
        </div>
        <input class="btn btn-primary" type="submit" value="Student Opslaan">
    </form>
@endsection
