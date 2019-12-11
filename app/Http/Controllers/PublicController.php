<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;

class PublicController extends Controller
{

    public function blog() {
        $posts = App\Post::all();
    	return view('blog', compact('posts'));
    }

    public function omos() {
        return view('omos');
    }

}