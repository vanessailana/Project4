@extends('layouts.app')


@section('content')






        @foreach($user as $user)



          <tbody>
      <tr>
      <p></p>
      <h1><td><h1> <p></p><kbd> Item Name </kbd> </h1><h1> {{$user->email}} </h1></td>   

      </h1>
      </tr>
      </tbody>
       



        @endforeach


