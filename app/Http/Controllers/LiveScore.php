<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LiveScore extends Controller
{
    public function index()
    {
        return view('livescore.index');
    }
}
