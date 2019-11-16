<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class AdminController extends Controller
{
   public function __construct() {

       $this->middleware('checkRole:admin');
   }

   // display all products in admin section
   public function dashboard () {

        $products = Product::paginate(10);

        return view ('admin.displayproducts', ['products'=>$products]);
    }

    public function createProduct () {

       return view('admin.createproduct');


    }

    // create new products - save to database
    public function createProductForm (Request $request) {

        $artist = $request->input('artist');
        $title = $request->input('title');
        $description = $request->input('description');
        $condition = $request->input('condition');
        $category = $request->input('category');
        $price = $request->input('price');


        Validator::make($request->all(),['image'=>'required|file|image|mimes:jpg,png,jpeg|max:2000'])->validate();
        $ext =  $request->file("image")->getClientOriginalExtension();
        $strImageReformat = str_replace(' ', '',$request->input('title'));

        $imageName = $strImageReformat.".".$ext;

        $imageEncode = File::get($request->image);

        Storage::disk('public')->put($imageName, $imageEncode);

        $createProduct = Array('artist'=>$artist, 'title'=>$title, 'description'=>$description, 'condition'=>$condition, 'image'=>$imageName, 'category'=>$category, 'price'=>$price);

        DB::table('products')->insert($createProduct);

        return redirect()->route('displayproducts');

    }

    // display product edit form
    public function editProduct ($id) {

       $product = Product::find($id);
       return view('admin.editproduct', ['product'=>$product]);

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

    public function deleteProduct ($id) {

       $product = Product::find($id);

       $exists = Storage::disk('public')->exists($product->image);

       if($exists){
            Storage::delete('public/images/product-images/'.$product->image);

        }

       Product::destroy($id);

       return redirect()->route('displayproducts');
    }
}
