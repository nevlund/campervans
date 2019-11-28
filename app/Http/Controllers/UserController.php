<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function edit () {

    	if (Auth::user ()) {

    		$user = User::find(Auth::user()->id);

    		if ($user) {

    			return view('edit_user')->withUser($user);
    		} else {

    			return redirect ()->back();
    		}
    	}	else {

    		return redirect ()->back();
    	}
    }

    public function update(Request $request) {

    	$user = User::find(Auth::user()->id);

    	if ($user) {
    		$validate = null;
    		if (Auth::user()->email === $request['email']) {

    			$validate = $request->validate([
    			'name' => 'required|min:2',
    			'email' => 'required|email'		

    		]);

    		} else {

    			$validate = $request->validate([
    			'name' => 'required|min:2',
    			'email' => 'required|email|unique:users'		

    		]);

    		}

    		if($validate) {
    		
    		$user->name = $request['name'];
    		$user->email = $request['email'];
    		$user->street = $request['street'];
    		$user->postalcode = $request['postalcode'];
    		$user->city = $request['city'];
    		$user->phone = $request['phone'];
			$user->save();
			$request->session()->flash('success', 'Din profil er blevet opdateret.');
			return redirect()->back();
    		}
    		else { return redirect()->back();
    		}
    	} else {
    		return redirect()->back();
    	}
    }
}
