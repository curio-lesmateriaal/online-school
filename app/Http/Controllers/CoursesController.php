<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CoursesController extends Controller
{

    public function create() {
        // resources/views/courses/create.blade.php
        return view('courses.create');
    }

    public function store(Request $request) {
        // dd( $request->all() );

        \DB::table('courses')->insert([
            'name' => $request->name,
            'docent' => $request->docent,
            'description' => $request->description
        ]);
        return redirect('/');
    }

}
