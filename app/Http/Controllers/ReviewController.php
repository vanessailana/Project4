<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Redirect;
use View;
use Illuminate\Support\Facades\Input;
use App\Review;

class ReviewController extends Controller
{
    //
    //
    //
   //inserting review into database.
   public function insertOpinion(Request $request) {
  
 

     $u = Review::create([
      'rest_name'  => $request->input('rest_name'),
      'useremail' => $request->input('useremail'),
      'ratingvalue' => $request->input('rating_value'),
      'tagline' => $request->input('tagline'),
      'body' => $request->input('body'),



     
   ]);


   return view('pages.yayreview');


 }

}