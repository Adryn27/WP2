<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloWorldController extends Controller
{
    public function index()
    {
        return "Saya sedang belajar Laravel 11";
    }
    public function ambilFile()
    {
        return view('ambilFile');
    }
}
