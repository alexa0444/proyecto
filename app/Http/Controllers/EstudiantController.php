<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EstudiantController extends Controller
{


    public function index()
    {
        return view('estudiant.solicitarP');
    }
}


