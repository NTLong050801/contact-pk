<?php

namespace longggng\contact\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use longggng\contact\Models\contact;
use longggng\contact\Mail\ContactMailable;
class ContactController extends Controller
{
    //
    public function index(){
        return view('contact::contact');
    }
    public function send(Request $request){
        // return $request->all();
        // Mail::to('nggthanhlong@gmail.com')->send(new ContactMailable($request->name,
    
        // ));
        contact::create($request->all());
        return redirect(route('contact'));
    }
}
