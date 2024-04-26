<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CricketReadWriteController extends Controller
{
    public function index()
    {
        return view('cricrw.index');
    }
}
