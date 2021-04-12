<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Navbarfooter;

use App\Cart;

class CheckoutController extends Controller
{
    public function create()
    {
    $cart = Cart::all();
    $nfdata = Navbarfooter::all();
    $total =Cart::sum('course_price');
    return view('front.checkout',compact('cart','nfdata','total'));	
    }
    
}
