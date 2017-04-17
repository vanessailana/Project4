<?php

namespace App\Http\Controllers;

use App\Restaurant;
use App\Times;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Redirect;
use View;
use Illuminate\Support\Facades\Input;

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
 ////simply resturant name 

public function showDetail(){
   
      $food = Restaurant::all();

   
        
   return view('pages.details',  compact('food'));

 }

//giving the specfic details of a resturant, when you press
//the see  more button
 public  function details($id) {


  $rest=Restaurant::all()->where('rest_id',$id);


    $users = DB::table('times')
            ->join('restaurants', 'rest_id', '=', 'times.restu_id')->get();

  
 return  view('pages.resturant_info',  compact('rest','users'));

   

  
    
 }

 //joining the operatings database.
 //

 public function combine($id) {

    $users = DB::table('times')
            ->join('restaurants', 'rest_id', '=', 'times.restu_id');


      return view('pages.resturant_info',  compact('users'));
 }


  protected function change(Request $request, $id) {
    
  
   
  $user = Restaurant::all()->where('rest_id',$id);;

    $name = $request->input('change');

   //street_address
    $name1 = $request->input('change1');


   //city
    $name2 = $request->input('change2');



   //state
    $name3 = $request->input('change3');


    //zipcode
    $name4 = $request->input('change4');



    //website
    $name5 = $request->input('change5');

  DB::table('restaurants')
            ->where('rest_id', $id)
            ->update(['name' => $name,'street_address'=> $name1, 'city' => $name2, 'state' => $name3, 'zipcode' => $name4 ,'website'=> $name5 ]);;



 return  view('pages.update_info',  compact('user'));

  

  
 
}


 public function storetimes(Request $request) {
  
        $u = Times::create([
      'Monday'  => $request->input('Monday'),
      'Tuesday' => $request->input('Tuesday'),
      'Wednesday' => $request->input('Wednesday'),
      'Thursday' => $request->input('Thursday'),
      'Friday' => $request->input('Friday'),
      'Saturday' => $request->input('Saturday'),
      'Sunday' => $request->input('Sunday')




     
   ]);

 return view('pages.successoperating');





 }





}


