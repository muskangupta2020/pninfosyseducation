<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Admin;

use App\Intern;

use App\Front;

use App\Navbarfooter;

class InternController extends Controller
{
    public function create()
    {
        $interndata = Intern::all();
    	return view('admin/intern',compact('interndata'));
    }
    public function internsave(Request $R)
    {
    	//print_r($R->all());
      //print_r($R->file("image"));
        //die;
        $file = $R->file('image');
        //dd($file);
        //exit;
        $filename = 'image'. time().'.'.$R->image->extension();
        //dd($filename);
         $file->move("upload/",$filename);
        //dd($file);
        $data = new Intern;
         $data->name=$R->name;
         $data->company=$R->company;
         $data->designation=$R->designation;
         $data->image=$filename;
        $data->save();
        if($data)
        {
            return redirect("admin/intern")->with('message',"Register successfully");//
        }
    }
    public function display()
    {
        $interndata = Intern::all();
        return view ('admin.intern',compact('interndata'));
    }
    public function delete($id)
   {
    $delete = Intern::find($id);
    $d =$delete->delete();
    if($d)
        {
            return redirect('admin/intern');
        }
   }

    public function intern()
    {
        $interndata = Intern::all();
        $nfdata = Navbarfooter::all();
        return view('front/intern',compact('interndata','nfdata'));
    }
}
