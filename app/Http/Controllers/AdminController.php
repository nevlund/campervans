<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Classified;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class AdminController extends Controller
{
   //public function __construct() {

       //$this->middleware('checkRole:admin');
   //}

   // display all products in admin section
   public function dashboard () {

        $classifieds = Classified::paginate(10);

        return view ('visannoncer', ['classifieds'=>$classifieds]);
    }

    public function create () {

       return view('create');


    }

    // create new products - save to database
    public function createListingForm (Request $request) {

        $title = $request->input('title');
        $category_id = $request->input('category_id');
        $description = $request->input('description');
        $price = $request->input('price');
        $condition = $request->input('condition');
        $image = $request->file('image');
        $location = $request->input('location');
        $email = $request->input('email');
        $phone = $request->input('phone');
        $user_id = auth()->id();

        
        Validator::make($request->all(),['image'=>'required|file|image|mimes:jpg,png,jpeg|max:2000'])->validate();
        $ext =  $request->file("image")->getClientOriginalName();
        $strImageReformat = $request->input('image');

        $image = $strImageReformat."".$ext;

        $imageEncode = File::get($request->image);

        Storage::disk('public')->put($image, $imageEncode);


        
        $createListing = Array('title'=>$title, 'category_id'=>$category_id, 'description'=>$description, 'price'=>$price, 'condition'=>$condition, 'image'=>$image, 'location'=>$location, 'email'=>$email, 'phone'=>$phone, 'user_id'=>$user_id);

        DB::table('classifieds')->insert($createListing);

        return redirect()->route('home');

    }

    // display product edit form
    public function editListing ($id) {

       $classified = Classified::find($id);
       return view('editListing', ['classified'=>$classified]);

    }

    // display product image edit form
    public function editProductImage ($id) {

        $product = Product::find($id);
        return view('admin.editproductimage', ['product'=>$product]);

    }

    // Update product images
    public function updateProductImage (Request $request, $id) {

       Validator::make($request->all(),['image'=>'required|file|image|mimes:jpg,png,jpeg|max:2000'])->validate();

        if ($request->hasFile('image')) {

            $product = Product::find($id);
            $exists = Storage::disk('public')->exists($product->image);

            //delete old image
            if($exists){
                Storage::delete('public/images/product-images/'.$product->image);

            }

            //upload new image
            $request->file('image')->getClientOriginalExtension();

            $request->image->storeAs('public/images/product-images/',$product->image);

            $arrayToUpdate = array('image'=>$product->image);
            DB::table('products')->where('id', $id)->update($arrayToUpdate);

            return redirect()->route('displayproducts');

            }

            else {

            $error = "No image was selected";
            return $error;

            }

    }

    public function updateProduct (Request $request, $id) {

       $artist = $request->input('artist');
       $title = $request->input('title');
       $description = $request->input('description');
       $condition = $request->input('condition');
       $category = $request->input('category');
       $price = $request->input('price');

       $updateArray = array('artist'=>$artist, 'title'=>$title, 'description'=>$description, 'condition'=>$condition, 'category'=>$category, 'price'=>$price);

       DB::table('products')->where('id', $id)->update($updateArray);

       return redirect() -> route('displayproducts');

    }

    public function deleteListing ($id) {

       $classified = Classified::find($id);

       Classified::destroy($id);

       return redirect()->route('visannoncer');
    }
}
