<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KemakomController extends Controller
{
    public function index()
    {
        return view("kemaHome");
    }
}
