<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreClassifiedRequest;
use App\Commands\StoreClassifiedCommand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

use App\Http\Requests;
use App\http\Controllers\Controller;
use App\Classified;
use Auth;


class ClassifiedsController extends Controller
{
  

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $classifieds = Classified::all();
        $classifieds = Classified::paginate(10);
        return view('annoncer', compact('classifieds'));
    }

    public function annoncer()
    {
        return view('annoncer', ['classifieds' => $classifieds]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
   

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreClassifiedRequest $request)
    {
        $title = $request->input('title');
        $category_id = $request->input('category_id');
        $description = $request->input('description');
        $price = $request->input('price');
        $condition = $request->input('condition');
        $main_image = $request->file('main_image');
        $location = $request->input('location');
        $email = $request->input('email');
        $phone = $request->input('phone');
        $user_id = auth()->id();
        
        //$owner_id = 1;
        
        // Check if image uploaded
        if($main_image){
            $main_image_filename = $main_image->getClientOriginalName();
            $main_image->move(public_path('images/listings'), $main_image_filename);
        } else {
            $main_image_filename = 'noimage.jpg';
        }
        
        // Create Command
        $command = new StoreClassifiedCommand($title, $category_id, $description, $main_image_filename, $price, $condition, $location, $email, $phone, $user_id);
        $this->dispatch($command);
        
        return \Redirect::route('classifieds.index')
                ->with('message', 'Annonce er oprettet');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $classified = Classified::find($id);
        return view('annoncedetalje', compact('classified'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

