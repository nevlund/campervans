<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{

    public function blog() {
        return view('blog');
    }

    public function omos() {
        return view('omos');
    }

}