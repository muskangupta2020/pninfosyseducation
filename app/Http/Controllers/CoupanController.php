<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Admin;

use App\Coupan;

class CoupanController extends Controller
{
   public function create()
   {
   	$data = Coupan::all();
   	return view('admin.coupan',compact('data'));
   }
   public function coupan_save(Request $a)
   {
   	//print_r($a->all());
   		$data = new Coupan;
        $data->coupan_code=$a->coupan_code;
        $data->amount=$a->amount;
        $data->amount_type=$a->amount_type;
        $data->status=$a->status;
        $data->expiry_date=$a->expiry_date;
        $data->save();
        if ($data) 
        {
        	return redirect('admin/coupan');
        }
   }
   public function display()
    {
    	$data = Coupan::all();
    	return view ('admin.coupan',compact('data'));
    }


}
