<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ListcategoriesController;
use App\Ad;
use App\Listcategory;
use App\Vehicle;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Auth;

class AdminController extends Controller
{
   //public function __construct() {

       //$this->middleware('checkRole:admin');
   //}

   // display items that belongs to a user in admin section
   public function dashboard () {

        $ads = Ad::where('user_id', auth()->id())->get();
        return view ('visannoncer', ['ads'=>$ads]);
    }

    public function create () {

      $listcategories = Listcategory::all();
      $vehicles = Vehicle::all();
      return view('create', ['listcategories' => $listcategories, 'vehicles' => $vehicles]);
    }

    // create new listings - save to database
    public function createListingForm (Request $request) {

        $title = $request->input('title');
        $listcategory_id = $request->input('listcategory_id');
        $vehicle_id = $request->input('vehicle_id');
        $description = $request->input('description');
        $price = $request->input('price');
        $image = $request->file('image');
        $year = $request->input('year');
        $color = $request->input('color');
        $fueltype = $request->input('fueltype');
        $user_id = auth()->id();

        
        Validator::make($request->all(),['image'=>'required|file|image|mimes:jpg,png,jpeg|max:2000'])->validate();
        $ext =  $request->file("image")->getClientOriginalName();
        $strImageReformat = $request->input('image');

        $image = $strImageReformat."".$ext;

        $imageEncode = File::get($request->image);

        Storage::disk('public')->put($image, $imageEncode);


        
        $createListing = Array('title'=>$title, 'listcategory_id'=>$listcategory_id, 'vehicle_id'=>$vehicle_id, 'description'=>$description, 'price'=>$price, 'image'=>$image, 'year'=>$year, 'color'=>$color, 'fueltype'=>$fueltype, 'user_id'=>$user_id);

        DB::table('ads')->insert($createListing);
        $request->session()->flash('success', 'Annoncen er blevet oprettet.');
        return redirect()->back();

    }

    // display ad listing edit form
    public function editListing ($id) {

      $listcategories = Listcategory::all();
      $vehicles = Vehicle::all();
      $ad = Ad::find($id);
      return view('edit_ad', ['ad'=>$ad, 'listcategories' => $listcategories, 'vehicles' => $vehicles]);

    }
    // display user edit form
    public function editUser ($id) {

      $user = User::find($id);
      //$user = User::all();
      return view('edit_user', ['user'=>$user]);

    }


    public function updateAd (Request $request, $id) {

        $title = $request->input('title');
        $listcategory_id = $request->input('listcategory_id');
        $vehicle_id = $request->input('vehicle_id');
        $description = $request->input('description');
        $price = $request->input('price');
        $year = $request->input('year');
        $color = $request->input('color');
        $fueltype = $request->input('fueltype');
        $user_id = auth()->id();

       $updateArray = Array('title'=>$title, 'listcategory_id'=>$listcategory_id, 'vehicle_id'=>$vehicle_id, 'description'=>$description, 'price'=>$price, 'year'=>$year, 'color'=>$color, 'fueltype'=>$fueltype, 'user_id'=>$user_id);

       DB::table('ads')->where('id', $id)->update($updateArray);

        $request->session()->flash('success', 'Annoncen er blevet opdateret.');
        return redirect()->back();

    }

    public function deleteListing ($id) {

       $ad = Ad::find($id);

       Ad::destroy($id);

       return redirect()->route('visannoncer');
    }
}
