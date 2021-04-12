<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Admin;

use App\Placement;

use App\Front;

use App\Navbarfooter;

class PlacementController extends Controller
{
     public function create()
    {
        $placementdata = Placement::all();
    	return view('admin/placement',compact('placementdata'));
    }
    public function placementsave(Request $R)
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
        $data = new Placement;
         $data->name=$R->name;
         $data->company=$R->company;
         $data->designation=$R->designation;
         $data->image=$filename;
        $data->save();
        if($data)
        {
            return redirect("admin/placement")->with('message',"Register successfully");//
        }
    }
    public function display()
    {
        $placementdata = Placement::all();
        return view ('admin.placement',compact('placementdata'));
    }
    public function delete($id)
   {
    $delete = Placement::find($id);
    $d =$delete->delete();
    if($d)
        {
            return redirect('admin/placement');
        }
   }

    public function placement()
    {
        $placementdata = Placement::all();
        $nfdata = Navbarfooter::all();
        return view('front/placement',compact('placementdata','nfdata'));
    }
}
