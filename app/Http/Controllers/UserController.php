<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\User;

use DB;

use Redirect;

class UserController extends Controller
{
    //show the users in the database
    //
   

  //we will be updating users by id. 

    public function changestatus($id) { 
 
     $users= User::all();

    $update= DB::table('users')
            ->where('name', $id)
            ->update(['is_admin' => 1]);




 return view('pages.users',  compact('users','update'));


        

}




}




        








            



