<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Front;

use App\Course;

use App\Banner;

use App\Navbarfooter;

use App\User;

use App\Cart;
 
use App\Workshop;

use Auth;

use DB;

use Session;

use App\Coursedetail;

use Illuminate\Support\Facades\Hash;

class Frontcontroller extends Controller
{
    public function index()
  {
    $nfdata = Navbarfooter::all();
    $data = Banner::all();
    $coursedata = Course::all();
    $workshopdata = Workshop::all();
	return view('front/index',compact('nfdata','data','coursedata','workshopdata'));
  }

    public function signup()
{
    $nfdata = Navbarfooter::all();
    return view('front.signup',compact('nfdata'));
}

public function signup_save(Request $s)
{
    $data=new User;
    $data->name=$s->name;
    $data->email=$s->email;
    $data->password=Hash::make($s->password);
    $data->save();
    if ($data)
    { 
        $nfdata = Navbarfooter::all();
        return view('front.signup',compact('nfdata'))->with('message','Successfully Signup');;
    }
}
public function login()
{
    $nfdata = Navbarfooter::all();
    return view('auth.login',compact('nfdata'));
}
public function login_save(Request $l)
{
    $session_id = Session::getId();
    //print_r($session_id);
    print_r($l->all());
    $data=$l->all();
    //print_r($data);
    if(Auth::attempt(['email'=>$data['email'],'password'=>$data['password']]))
    {
        Cart::where('session_id',$session_id)->update(['user_email',$data['email']]);
        return redirect('front/cart')->with('message','Successfully Login');
    }
    else
    {
            return redirect('front/login');
    }
}

}
