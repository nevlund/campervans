<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Contact;
use Mail;
class ContactController extends Controller
{
   public function contact() {
   return view('contact');
} 
   /** * Show the application dashboard. * * @return \Illuminate\Http\Response */
   public function contactPost(Request $request) 
   {
    $this->validate($request, [ 'navn' => 'required', 'email' => 'required|email', 'besked' => 'required' ]);
    Contact::create($request->all());

    Mail::send('email',
       array(
           'navn' => $request->get('navn'),
           'email' => $request->get('email'),
           'besked' => $request->get('besked')
       ), function($message)
   {
       $message->from('nievlund@gmail.com');
       $message->to('nievlund@gmail.com', 'Niels')->subject('Campervans.dk - kontakt os');
   });
    return back()->with('succes', 'Tak for din besked!'); 
   }
}
