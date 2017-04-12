@extends('layouts.app')

@section('content')
   <!DOCTYPE html>
<html>
<head>

</head>
<body>

@if(Auth::user()->is_admin=='1')

<div class="container">

<center>

<h1> Welcome  {{ Auth::user()->username }}! </h1>
<h1> Remeber We  <kbd> all </kbd> are food critics at heart <i class="fa fa-heart-o" aria-hidden="true"></i>
 </h1>

</center>
 <h1> As part of being an admin you get to judge food </h1>
 <center>

<iframe width="900" height="345" src="https://www.youtube.com/embed/cx-foylAP40?autoplay=1">
</iframe>

</center>



@else 
<center>
<h1> Have fun and happy reviewing <i class="fa fa-heart-o" aria-hidden="true"></i>
 </h1>

<h1> Welcome  {{ Auth::user()->username }}! </h1>

</center>

<center>

<iframe width="900" height="345" src="https://www.youtube.com/embed/8Pw8B-0tg5E?autoplay=1">
</iframe>

</center>



@endif

</div>
</body>
</html>


@endsection
