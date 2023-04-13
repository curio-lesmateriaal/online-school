<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PagesController extends Controller
{

    public function home() {
        $courses = DB::table('courses')
            ->get();


        $lokalen = DB::table('lokalen')->get();

        return view('welcome', [
            'courses' => $courses,
            'lokalen' => $lokalen
        ]);
    }

}
