<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Admin;

use App\Team;

use App\Front;

use App\Navbarfooter;

class TeamController extends Controller
{
    public function create()
    {
        $teamdata = Team::all();
    	return view('admin/team',compact('teamdata'));
    }
    public function teamsave(Request $R)
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
        $data = new Team;
         $data->name=$R->name;
         $data->about=$R->about;
         $data->image=$filename;
        $data->save();
        if($data)
        {
            return redirect("admin/team")->with('message',"Register successfully");//
        }
    }
    public function display()
    {
        $teamdata = Team::all();
        return view ('admin.team',compact('teamdata'));
    }
    public function delete($id)
   {
    $delete = Team::find($id);
    $d =$delete->delete();
    if($d)
        {
            return redirect('admin/team');
        }
   }

    public function team()
    {
        $teamdata = Team::all();
        $nfdata = Navbarfooter::all();
        return view('front/team',compact('teamdata','nfdata'));
    }
}
