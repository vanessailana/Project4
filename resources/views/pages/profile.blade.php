@extends('layouts.app')
@section('content')
<div class="container">



<h1> My Profile Information </h1>

<div class="col" style="float:right">
<a href="{{ url('/update')}}" class="btn btn-info btn-lg" role="button">Change Yo Password <i class="fa fa-lock" aria-hidden="true"></i> </a>

</div>

<p></p>

<h2> <b> Name </br> </h2>

 <h2>  {{ Auth::user()->name }}  </h2>
 
<h2> <b> Username </br> </h2>

  <h2>  {{ Auth::user()->username }}  </h2>

  <h2> <b> Email </br> </h2>

  <h2>  {{ Auth::user()->email }}  </h2>

   <h2> <b> I joined </br> </h2>

  <h2>  {{ Auth::user()->created_at }}  </h2>



 
 @endsection