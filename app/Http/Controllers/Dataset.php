<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Dataset extends Controller
{
    function team() {
        return view('dataset.team');
    }

    function project() {
        return view('dataset.project');
    }

    function project2() {
        return view('dataset.project2');
    }
}

