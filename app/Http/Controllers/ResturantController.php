<?php

namespace App\Http\Controllers;

use App\Restaurant;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Redirect;
use View;

class ResturantController extends Controller
{
   
    
  

   //store resturant data 
  public function store(Request $request) {
  
 

     $u = Restaurant::create([
      'name'  => $request->input('name'),
      'street_address' => $request->input('street_address'),
      'city' => $request->input('city'),
      'state' => $request->input('state'),
      'zipcode' => $request->input('zipcode'),
      'website' => $request->input('website')



     
   ]);


   return view('pages.success_resturant');


 }

 //show the components served at the resturant 

public function showDetail(){
   
    $food=DB::table('restaurants')->pluck('name');
    

    //getting admin status 

        
   return view('pages.details',  compact('food'));

 }


}


