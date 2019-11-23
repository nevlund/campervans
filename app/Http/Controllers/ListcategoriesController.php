<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ad;
use App\Listcategory;

class ListcategoriesController extends Controller
{
    public function index()
    {
        $listcategories = Listcategory::all();
        //$classifieds = Classified::paginate(10);
        //return view('create', compact('Listcategory'));
    }
    public function show()
    {
        $listcategories = Listcategory::all();
        return view ('create', compact('listcategories'));
    }
}
