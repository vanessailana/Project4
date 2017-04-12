<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use App\User;
use Redirect;

class UpdatePasswordController extends Controller
{
   
    protected function update(Request $request, $username) {
    
  
   $user = User::findOrFail($username);
    $name = $request->input('change');

 $user->update(['password' => bcrypt($name)]);

  return Redirect::to('/yay');
}

}