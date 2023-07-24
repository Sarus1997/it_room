<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class Dataset extends Controller
{
    function index() {
        return view('dataset.team');
    }
}
