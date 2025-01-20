<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class task extends Controller
{
    public function index()
    {
        $name = 'Sandra';
        $age = 24;
        return view('welcome', compact('name', 'age'));
    }  
}

