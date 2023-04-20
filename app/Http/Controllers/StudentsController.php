<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentsController extends Controller
{
    public function create()
    {
        // resources/views/courses/create.blade.php
        return view('students.create');
    }

    public function show($id) {
        $student = \DB::table('students')
                        ->where('id', $id)
                        ->first();

        return view('students/show', [
            'student' => $student
        ]);

    }

    public function store(Request $request)
    {
        \DB::table('students')->insert([
            'voornaam'      => $request->voornaam,
            'achternaam'    => $request->achternaam,
            'tussenvoegsel' => $request->tussenvoegsel,
            'nummer'        => $request->nummer,
            'klas'          => $request->klas,
            'email'         => $request->email,
            'mentor'        => $request->mentor
        ]);

        return redirect('/');
    }

    public function destroy($id) {
        $student = \DB::table('students')
                        ->where('id', $id)
                        ->delete();


        return redirect('/');
    }
}
