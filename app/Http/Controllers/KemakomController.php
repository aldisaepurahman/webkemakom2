<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KemakomController extends Controller
{
    public function index()
    {
        return view("kemaHome");
    }
    
    public function bem()
    {
        return view("bem");
    }

    public function dpm()
    {
        return view("dpm");
    }

    public function about()
    {
        return view("about");
    }

    public function divisi($div)
    {
        return view("divisiBem");
    }

    public function berita()
    {
        return view("berita");
    }
    
    public function event()
    {
        return view("event");
    }

    public function pixel()
    {
        return view("pixel");
    }

    public function youtube()
    {
        return view("youtube");
    }

    public function detail($konteks, $id)
    {
        return view("viewBeritaPixelYtEvent");
    }
}
