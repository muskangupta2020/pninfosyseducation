<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Navbarfooter;

use App\Contact;

class ContactController extends Controller
{
   public function contact()
   {
   	 $nfdata = Navbarfooter::all();
   	 $contactdata = Contact::all();
   	 return view('front/contact',compact('nfdata','contactdata'));
   }

   public function create()
   {
   	 $nfdata = Navbarfooter::all();
   	 $contactdata = Contact::all();
   	return view('front/contact',compact('nfdata','contactdata'));
   }
   public function savecontact(Request $c)
   {
    //print_r($c->all());
   	  $contactdata=new Contact;
      $contactdata->name=$c->name;
      $contactdata->email=$c->email;
      $contactdata->contact=$c->contact;
      $contactdata->message=$c->message;
      $contactdata->save();
      if ($contactdata)
    {
        return redirect('front');
    }
    }
   public function display()
    {
        $contactdata = Contact::all();
        return view ('admin.contact',compact('contactdata'));
    }
  
}
