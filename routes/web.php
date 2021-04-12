<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|



*/

Route::get('/', function () {
    return view('welcome');
});



//----Admin Dashboard-----//
Route::get('admin','AdminController@pglogin');

Route::get('admin/index','AdminController@index');
//admin sign-up --//
Route::get('admin/register','AdminController@registration');
Route::post('admin/login','AdminController@login');
Route::post('/adregistration','AdminController@signup');



//----Category----//
Route::get('admin/category','CategoryController@create');
Route::post('admin/save','CategoryController@save');
Route::get('admin/edit/{id}','CategoryController@edit');
Route::post('admin/update','CategoryController@update');
Route::get('admin/delete/{id}','CategoryController@delete');


//----Courses----//
Route::get('admin/course', 'CourseController@create');
Route::post('admin/csave', 'CourseController@saveimage');
Route::get('admin/c_display', 'CourseController@display');
Route::post('admin/course_update', 'CourseController@course_update');
Route::get('admin/c_view/{id}', 'CourseController@view');
Route::get('admin/c_delete/{id}', 'CourseController@delete');
Route::get('admin/c_edit/{id}', 'CourseController@edit');

//-----Banner-----//
Route::get('admin/banner','BannerController@create');
Route::post('admin/banner/save','BannerController@save');
Route::get('admin/banner','BannerController@display');
Route::get('admin/banner/edit/{id}','BannerController@banneredit');
Route::post('admin/banner/update','BannerController@update');
Route::get('admin/banner/delete/{id}','BannerController@delete');


//-----Front-PN-Infosys----//
Route::get('front','FrontController@index');


//----Navbar & Footer----//
Route::get('admin/navbarfooter','NavbarfooterController@create');
Route::post('admin/navbarfooter/save','NavbarfooterController@save');
Route::get('admin/navbarfooter','NavbarfooterController@display');
Route::get('front/navbarfooter/edit/{id}','NavbarfooterController@edit');
Route::post('front/navbarfooter/update','NavbarfooterController@update');
Route::get('front/navbarfooter/delete/{id}','NavbarfooterController@delete');

//-----Course_Detail----// 
Route::get('course_detail/{id}','CoursedetailController@course_detail');
 
//----Courses-----//
Route::get('front/courses','CoursedetailController@courses');


//-----Category_Course-----//
Route::get('front/category_course/{id}','CoursedetailController@category_course');


//-----Add To Cart-----------//
Route::get('front/cart','CoursedetailController@cart');
Route::post('front/cart/save','CoursedetailController@addtocart');
Route::get('front/cart/delete/{id}','CoursedetailController@delete');
Route::get('cart/quantity_update/{id}/{course_quantity}','CoursedetailController@quantity_update');


//-------------signup----------------//
Route::get('front/signup','FrontController@signup');
Route::post('front/signup_save','FrontController@signup_save');


//-----------------login--------------//
Route::get('front/login','FrontController@login');
Route::post('front/login_save','FrontController@login_save');




//--------------Team--------------//
Route::get('admin/team','TeamController@create');
Route::post('admin/teamsave','TeamController@teamsave');
Route::get('front/team','TeamController@team');
Route::get('admin/team/delete/{id}','TeamController@delete');



//-----------Intern--------------//
Route::get('admin/intern','InternController@create');
Route::post('admin/internsave','InternController@internsave');
Route::get('front/intern','InternController@intern');
Route::get('admin/intern/delete/{id}','InternController@delete');


//-----------Placements------------//
Route::get('admin/placement','PlacementController@create');
Route::post('admin/placementsave','PlacementController@placementsave');
Route::get('front/placement','PlacementController@placement');
Route::get('admin/placement/delete/{id}','PlacementController@delete');


//-------------Contact Page-------------//
Route::get('front/contact','ContactController@contact');
Route::get('front/contact','ContactController@create');
Route::post('admin/savecontact','ContactController@savecontact');
Route::get('admin/contact','ContactController@display');


//---------Workshop-----------//
Route::get('admin/workshop','WorkshopController@create');
Route::post('admin/workshop_save','WorkshopController@workshop_save');
Route::get('admin/workshop/edit/{id}','WorkshopController@workshop_edit');
Route::post('admin/update','WorkshopController@update');
Route::get('admin/delete/{id}','WorkshopController@delete');
Route::get('admin/workshopimage', 'WorkshopController@workshopimage');
Route::post('admin/wsave', 'WorkshopController@wsave');
Route::get('admin/workshop_display', 'WorkshopController@wdisplay');
Route::get('front/workshop','WorkshopController@workshop');

//-----------coupan--------//
Route::get('admin/coupan','CoupanController@create');
Route::post('admin/coupan_save','CoupanController@coupan_save');
Route::get('admin/coupan/display', 'CoupanController@display');

//----------checkout-----//
Route::get('front/checkout','CheckoutController@create');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
