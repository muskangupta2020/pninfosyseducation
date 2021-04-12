<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Admin;

use DB;
use Session;
class Admincontroller extends Controller
{
    public function pglogin()
    {
	return view('admin.login');
    }
    public function registration()
    {
     return view('admin.register');
    }
    public function signup(Request $r){
      $data = new Admin;
         $data->name=$r->name;
         $data->email=$r->email;
         $data->password=$r->password;
        $data->save();
        if($data)
        {
            return redirect("/admin")->with('message',"Register successfully");//
        }
  }
  public function login(Request $L)
  {
//   	echo "<pre>";
// $r=$L->all();
//   	print_r($r);
  	 if(admin::where('email',$L->email)->where('password',$L->password)->get())
{   
	$r=admin::where('email',$L->email)->where('password',$L->password)->get();
	 $session_id = session()->put('id',$r->id);
	echo $session_id;
	 // return redirect('admin/index',compact(''))->with('message',"Login successfully");
}  	 
  	
  else{
  	echo "not";
  }

  }
  public function index(){
  	return view('admin.index');
  }
}

