<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Course;

use App\Coursedetail;

use App\Navbarfooter;

use App\Frontend;

use App\Category;

use App\Cart;

use App\Coupan;

use DB;

use Session;

use Auth;
class CoursedetailController extends Controller
{
   public function course_detail($id)
    {
         $nfdata = Navbarfooter::all();
         $course=Course::find($id);
        return view('front.course_detail',compact('nfdata','course'));
    }

public function courses()
    {
         $nfdata = Navbarfooter::all();
         $coursedata=Course::all();
         $category=Category::all();
        return view('front.courses',compact('nfdata','coursedata','category'));
    }


   public function category_course($id){

         $nav = Navbarfooter::all();
         $data=Course::all();
         $category=Category::find($id);
         return view('front.category_course',compact('nav','data','category'));
}
public function addtocart(Request $m)
{
   //print_r($m->all());
   $session_id = Session::getId();
    $data = new Cart;
    $data->session_id=$session_id;
    $data->course_id=$m->course_id;
    $data->course_name=$m->course_name;
    $data->course_price=$m->course_price;
    $data->course_quantity=$m->course_quantity;
    $data->course_image=$m->course_image;
    $data->save();
    if($data)
    {
        return redirect('front/cart');
    }

}
public function cart()
{
    $session_id = Session::getId();
    //print_r($session_id);
     $nfdata = Navbarfooter::all();
     $cart = Cart::where('session_id',$session_id)->get();
     $data = Coupan::all();
     $total =Cart::sum('course_price');
     return view('front.cart',compact('nfdata','cart','data','total'));
}
public function delete($id)
{
      $ct =  Cart::find($id)->delete();
        if ($ct)
        {
            return redirect('front/cart');//redirect->always use url name// 

         }
}
public function quantity_update($id=null,$course_quantity=null)
    {
         // echo $id;
         // echo $course_quantity;
        DB::table('carts')->where('id',$id)->increment('course_quantity',$course_quantity);
        return redirect('front/cart')->with('message','Product Quantity Has Been Updated');
    }
}
