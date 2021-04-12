<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Category;

use App\Admin;

class Categorycontroller extends Controller
{
    public function create()
    {
    	$data = Category::all();
    	$count = 0;	
    	return view('admin.category',compact('data','count'));
    }
    public function save(Request $a)
    {
  
   	$r= new Category;
   	$r->name=$a->name;
   	$r->status=1;

   	$r->save();
   	if($r)
      {
        return redirect('admin/category'); 
      }
   
   }
   public function display()
    {
        $data = Category::all();
        // echo."<pre>";
        //print_r($data);
        return view("admin/category", compact('data','count'));
    }
    public function edit($id)

   {
   	$edit= Category::find($id);
   	return view("admin.edit",compact('edit'));

   }
   public function update(Request $u)
   {
   
    $r = Category::find($u->id);
    $r->name=$u->name;
    $r->save();
    if($r)

    {
        return redirect('admin/category');
    }

    }
    public function delete($id)
    {
    $delete = Category::find($id);
   	$d =$delete->delete();
    if($d)
        {
            return redirect('admin/category');
        }
    }
}
