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
   public function show()
    {
      


    $users=DB::table('users')->pluck('email');

    //getting admin status 

        
   return view('pages.users',  compact('users'));
    }


  //we will be updating users by id. 

    public function update($id) { 
 
      DB::table('users')
            ->where('id', $id)
            ->update(['is_admin' => 1]);



        

}

}




        








            



