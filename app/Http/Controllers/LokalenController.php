<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LokalenController extends Controller
{
    public function create() {
        return view('lokalen.create');
    }
}
