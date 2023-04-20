<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LokalenController extends Controller
{
    public function create() {
        return view('lokalen.create');
    }

    public function show($id) {
        $lokaal = \DB::table('lokalen')
                    ->where('id', $id)
                    ->first();

        return view('lokalen.show', [
            'lokaal' => $lokaal
        ]);
    }

    public function store(Request $request) {
        // show the data that comes from the form:
        // dd( $request->all() );

        if ($request->has_screen == 'on') {
            $screen = true;
        } else {
            $screen = false;
        }

        \DB::table('lokalen')->insert([
            'name' => $request->name,
            'floor' => $request->floor,
            'capacity' => $request->capacity,
            'has_screen' => $screen
        ]);

        // redirect de gebruiker terug naar de homepage
        return redirect('/');


    }
}
