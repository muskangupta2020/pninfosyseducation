<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Navbarfooter;

use App\Front;

use App\Admin;


class NavbarfooterController extends Controller
{
    
    public function create()
    {
    	$nfdata = Navbarfooter::all();
      print_r($nfdata);
      echo "<pre>";
    	//return view('admin/navbarfooter',compact('nfdata'));
    }

    public function save(Request $a){
    	// print_r($a->all());
    	// print_r($a->file('image'));
    	$file=$a->file('image');
    	// dd($file);
    	$filename = 'image'. time().'.'. $a->image->extension();
         // dd($filename);
        $file->move("upload/",$filename);
    	 // dd($file);
        $nfdata = new Navbarfooter;
        $nfdata->email=$a->email;
        $nfdata->address=$a->address;
        $nfdata->phone=$a->phone;
        $nfdata->description=$a->description;
        $nfdata->image=$filename;
        $nfdata->save();
        if ($nfdata) 
        {
        	return redirect('admin/navbarfooter');
        }
	}


    public function display()
    {
    	$nfdata = Navbarfooter::all();
    	return view ('admin.navbarfooter',compact('nfdata'));
    }

  public function edit($id)

   {
   	$edit= Navbarfooter::find($id);
   	return view("front.edit",compact('edit'));

   }

 
   public function update(Request $u)
   {
         $file = $u->file('image');
      
        $filename = 'image'. time().'.'.$u->image->extension();
      
        $file->move("upload/",$filename);

       
        $r = Navbar::find($u->id);
        $r->email=$u->email;
        $r->phone=$u->phone;
        $r->address=$u->address;


        $r->description=$u->description;
       $r->image=$filename;

        $r->save();
        if($r){
            return redirect('front/navbarfooter');
        }
        }
   public function delete($id)
   {
   	$delete = Navbarfooter::find($id);
   	$d =$delete->delete();
    if($d)
        {
            return redirect('front/navbarfooter');
        }
   }



}
