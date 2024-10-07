<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LatihanController extends Controller
{
    public function getTabel()
    {
        return view('Latihan1.getTabel');
    }
    public function getForm()
    {
        return view('Latihan1.getForm');
    }
}
