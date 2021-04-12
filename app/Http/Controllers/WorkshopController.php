<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Workshop;

use App\Admin;

use App\Navbarfooter;

use App\Workshopimage;

use DB;

class WorkshopController extends Controller
{
    public function create()
    {
    	$workshopdata = Workshop::all();
    	return view('admin.workshop',compact('workshopdata'));
    }
    public function workshop_save(Request $a)
    {
  
   	$r= new Workshop;
   	$r->title=$a->title;

   	$r->save();
   	if($r)
      {
        return redirect('admin/workshop'); 
      }
   
   }
   public function display()
    {
        $workshopdata = Workshop::all();
        // echo."<pre>";
        //print_r($data);
        return view("admin.workshop", compact('workshopdata'));
    }
    public function workshop_edit($id)

   {
   	$edit= Workshop::find($id);
   	return view("admin.edit",compact('edit'));

   }
   public function update(Request $u)
   {
   
    $r = Workshop::find($u->id);
    $r->title=$u->title;
    $r->save();
    if($r)

    {
        return redirect('admin/workshop');
    }

    }
    public function delete($id)
    {
    $delete = Workshop::find($id);
   	$d =$delete->delete();
    if($d)
        {
            return redirect('admin/workshop');
        }
    }
     public function workshopimage()
    {
    	$workshopdata = Workshop::all();
    	$item = Workshopimage::all();
    	return view('admin.workshopimage',compact('workshopdata','item'));
    }
    public function wsave(Request $R)
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
        $item = new Workshopimage;
         $item->title=$R->workshop;
         $item->image=$filename;
        $item->save();
        if($item)
        {
          $workshopdata = Workshop::all();
          $item = Workshopimage::all();
            return view("admin.workshop_display",compact('workshopdata','item'))->with('message',"Register successfully");//
        }
      
     }
    public function wdisplay()
    {
      $workshopdata = Workshop::all();
        $item = Workshopimage::all();
       // echo."<pre>";
        //print_r($data);
        return view("admin.workshop_display",compact('workshopdata','item'));
    }
    public function workshop()
    {
      $nfdata = Navbarfooter::all();
      $workshopdata = Workshop::all();
      $item = Workshopimage::all();
      return view("front.workshop",compact('nfdata','workshopdata','item'));
    }
}
 