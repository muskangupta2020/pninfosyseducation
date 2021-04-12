<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Banner;

use App\Admin;

class BannerController extends Controller
{
    public function create(){
    	return view('admin.banner');
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
        $data = new Banner;
        $data->title=$a->title;
        $data->description=$a->description;
        $data->image=$filename;
        $data->save();
        if ($data) 
        {
        	return redirect('admin/banner');
        }



    }
  public function display()
    {
    	$data = Banner::all();
    	return view ('admin.banner',compact('data'));
    }

  public function banneredit($id)

   {
   	$edit= Banner::find($id);
   	return view("admin.banneredit",compact('edit'));

   }

 
   public function update(Request $u)
   {
         $file = $u->file('image');
      
        $filename = 'image'. time().'.'.$u->image->extension();
      
        $file->move("upload/",$filename);

       
        $r = Banner::find($u->id);
        $r->title=$u->title;

        $r->description=$u->description;
       $r->image=$filename;

        $r->save();
        if($r){
            return redirect('admin/banner');
        }
        }
   public function delete($id)
   {
   	$delete = Banner::find($id);
   	$d =$delete->delete();
    if($d)
        {
            return redirect('admin/banner');
        }
   }

}

