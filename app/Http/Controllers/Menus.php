<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Menus extends Controller
{
    public function index()
    {
        return view('backend.default');
    }
}
