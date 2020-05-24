<?php

use Illuminate\Support\Facades\Route;
use App\Mail\testmail;

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
  });//->middleware('Checkage');

//04/04/2020
//Route::get('test','Testcontroller@index');
//Route::view('login','login');
//Route::post('Testcontroller','Testcontroller@account');

//05/04/2020
//*page vailidation*//
//Route::post ('samplecontroller','samplecontroller@index');
//Route::view('/sample','sample');

// //*website layout for common pages*//
// Route::get('/prg','prgcontroller@index');
// Route::view('/layout','layout');
// Route::view('/home','home');
// Route::view('/profile','profile');

//*middleware*//--------------------------------------------------------------------------
//globle route//
//Route::view('unauthroized','unauthroized');
//Route::view('midlw_profile','midlw_profile');//->middleware('Checkage');//

// Route::group(['middleware'=>['customauth']], //gruop middleware
//     function()
//     {
//         Route::get('/', function () {
//             return view('welcome');
//         });
//         Route::view('midlw_profile','midlw_profile');
//     }
// );

// Route::post('Csrfcontroller','csrfcontroller@index');
// Route::view('login2','login2');

//Route::get('APLcontroller','APLcontroller');  //call controller for API
//Route::view('api','api'); //call webpage for API

//*06/04/2020*//
//Sesson with loin//------------------------------------------------------------
// Route::view('logon','login_session');  //for loinpage
// Route::post('sessioncontroller','sessioncontroller@index'); //for login data access controller

// Route::get('/profile_session', function () {        //for ssesoin creation
//     if(!session()->has('data'))
//     {
//         return redirect('logon');
//     }
//     return view('profile_session');
// });
//Route::view('profile_session','profile_session');  //for profile page, but not use with session single time

// Route::get('/logout', function () {                //for logut
//     session()->forget('data');
//     return redirect('logon');
// });


//session with middeleware//---------------------------------------------------

// Route::group(['middleware'=>['customAuth']],function(){
//     Route::view('profile_session','profile_session');

//     Route::get('/', function () {
//         return view('welcome');
//     });
// });

//*flash session*//-------------------------------------------------------
// Route::view('flash','flash_session');                             //call login page
// Route::post('sessioncontroller','sessioncontroller@index');       //call controller

//*LOCALIZATION*//-------------------------------------------------------

//Route::view('plc','p_localiztion');

// Route::get('/p_localiztion/{lang}', function ($lang) {
//           App::setlocale($lang);
//           return view('p_localiztion');
//      });

//Filepload-------------------------------------------------------------------------------
Route::view('fileupld','fileupld');
Route::post('FlupldController','FlupldController@image');
//--------------------------------------------------------------------------------------------

//*---------------DATABASE CONNECTION--------------------------------*///
Route::get('DBcontroller','DBcontroller@index');                             ///for access DATABASE
//-----------------------------------------------------------------------------------


//------------------------07-04-2020------------------------------------//
Route::get('Modelcontroller','Modelcontroller@input');

//--------------------------------08.04.2020---------------------------------//
Route::view('delDB','delDB');
Route::post('Delcontroller','Delcontroller@delete');

//---------------------------DB Update----------------------------------//
Route::view('upd','Update');
Route::post('UpdateController','UpdateController@update');
//-------------------------Route Model----------------------------------//
Route::get('rmodel/{id:name}','testcontroller@routemodel');       //for access data through name & outher (route model)

//--------------------------insert Databse-----------------------------//
  //Route::get('insrt','InsDBcontroller@save');                    //for connection testing

  Route::view('ins','insertDB');
  Route::post('InsDBcontroller','InsDBcontroller@save');

//-----------------------------09.04.2020--------------------------------------//

//---------------------------makedownmail----------------------------------//
Route::get('/t', function () {
  //return view('welcome');
  return new testmail();
});
//-------------------------------sanctum-using with postman------------------------------//
//1.change database project to product
//2.use code url-https://github.com/anil-sidhu/laravel-sanctum
//3.use postman application.
//4.use api Route

//------------------------------------Resource controller--------------------------------------//
//1. create controller StudentController with resource
Route::resource('StudentCont','StudentCont');
Route::view('std','student');
//------------------------------------Accessor--------------------------------------//
Route::get('access','AccessorController@access');

//--------------------------10.04.2020-------------------------------//
//--------------------------bootstrap----------------------------//
Route::view('color','bootstrap/color');
Route::view('cd','bootstrap/code');
Route::view('typ','bootstrap/typography');
Route::view('text','bootstrap/text');
Route::view('table','bootstrap/table');
Route::view('figure','bootstrap/figure');
Route::view('spacing','bootstrap/spacing');
Route::view('vrta','bootstrap/vertical_alignment');
Route::view('display','bootstrap/display');
Route::view('Embeds','bootstrap/Embeds');
Route::view('float','bootstrap/float');
Route::view('alert','bootstrap/alert');
Route::view('bread','bootstrap/breadcumb');
Route::view('btn', 'bootstrap/buttons');
Route::view('btngrp','bootstrap/btngrp');
Route::view('cb','bootstrap/checkbox');
Route::view('cbx','bootstrap/checkbx');
Route::view('card', 'bootstrap/card');
Route::view('drp', 'bootstrap/dropdwon');
Route::view('coll', 'bootstrap/collapes');
Route::view('acc','bootstrap/accordion');
Route::view('bdg','bootstrap/badges');


//--------------------------11.04.2020-----------------------------------//
//Route::view('layout','layout');
//Route::view('login','login');
Route::get('list','User@list');
