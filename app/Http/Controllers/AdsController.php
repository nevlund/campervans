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
use App\Ad;
use App\User;
use Auth;


class AdsController extends Controller
{
  

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ads = Ad::all();
        $ads = Ad::paginate(10);
        return view('annoncer', compact('ads'));
    }

    public function annoncer()
    {
        return view('annoncer', ['ads' => $ads]);
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ad = Ad::find($id);
        $ad->user_id;
        $user = User::find($ad->user_id);
        $vehicleid = $ad->vehicle_id;
        //$ads = Ad::where('user_id', auth()->id())->get();
        return view('annoncedetalje', compact('ad', 'user'));
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

