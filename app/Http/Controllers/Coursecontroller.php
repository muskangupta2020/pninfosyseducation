<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Course;

use App\Category;

use App\Navbarfooter;

use App\Frontend;

class CourseController extends Controller
{
    public function create()
    {
      $coursedata = Category::all();
        return view("admin/course",compact('coursedata'));
    }
     
    public function display()
    {
        $coursedata = Course::all();
       // echo."<pre>";
        //print_r($data);
        return view("admin/c_display",compact('coursedata'));
    }
     public function view($id)
    {
        //  echo $id;
        $view = Course::find($id);
        //echo "<pre>";
        //print_r($data);
        return view("admin/c_view",compact('view'));

    }
    public function edit($id)
    {
          //echo $id;
        $edit =  Course::find($id);
        //echo "<pre>";
        //print_r($data);
        return view("admin.c_edit",compact('edit'));   

     }
      public function course_update(Request $u)

    {
      // print_r($u->all())
    if($u->hasFile('image'))
    {
        $file = $u->file('image');
        $filename = 'image'. time().'.'.$file->extension();
      
        $file->move("upload/",$filename);
        $r =  Course::find($u->id);
        $r->course_details=$u->course_details;
        $r->course_include=$u->course_include;
        $r->course_content=$u->course_content;
        $r->course_image=$filename;
        $r->save();
        if ($r)
        {
            return redirect('admin/c_display');//redirect->always use url name// 

         }
    }
      
    else
    {
        $r =  Course::find($u->id);
        $r->course_details=$u->course_details;
        $r->course_include=$u->course_include;
        $r->course_content=$u->course_content;
        //$r->course_image=$u->course_image;
        $r->save();
        if ($r)
        {
            return redirect('admin/c_display');//redirect->always use url name// 

         }
    }
     }
     public function delete($id)

    {
        //  echo $id;
        $d =  Course::find($id);
        $delete = $d->delete();
        if ($delete)
        {
            return redirect('admin/c_display');//redirect->always use url name// 

         }
    }
    public function image()
    {
      return view('admin.image');
      
    }
     public function saveimage(Request $R)
    {
      //print_r($R->all());
      //print_r($R->file("image"));
        //die;
        $file = $R->file('course_image');
        //dd($file);
        //exit;

    $filename = 'course_image'. time().'.'.$R->course_image->extension();
        //dd($filename);
         $file->move("upload/",$filename);
        //dd($file);
        $coursedata = new Course;
         $coursedata->name=$R->category;
         $coursedata->course_name=$R->course_name;
         $coursedata->course_description=$R->course_description;
         $coursedata->course_price=$R->course_price;
         $coursedata->course_details=$R->course_details;
         $coursedata->course_content=$R->course_content;
         $coursedata->course_include=$R->course_include;
         $coursedata->course_image=$filename;
        $coursedata->save();
        if($coursedata)
        {
            return redirect("admin/c_display")->with('message',"Register successfully");//
        }
      
    }
    
}
