@extends('layouts.app')

@section('content')

   <!DOCTYPE html>
 
<html>

<body> 
<center>

<h1> Hey {{Auth::user()->username}} </h1>

<h1> Here are your reviews  <i class="fa fa-thumbs-up" aria-hidden="true"></i> </h1>

 @foreach($test as $test)



 <mark> <h1> <mark> Resturant Name </mark></h1> 

 <h1>  {{$test ->rest_name}} </h1>


 <mark> <h1> <mark> Tagline </mark></h1> 

 <h1>  {{$test ->tagline}} </h1>



 <mark> <h1> <mark> Rating </mark></h1> 

 <h1>  {{$test ->ratingvalue}} </h1>


 <mark> <h1> <mark> Body </mark></h1> 


 <h1>  {{$test ->body}} </h1>


 @endforeach

</center>
</body>
</html>

@endsection