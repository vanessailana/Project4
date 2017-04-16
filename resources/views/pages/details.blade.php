
@include('layouts.app')

<div class="container">

<center>


<div class="container">

<h1>All Resturants on This Website </h1>

<div class="alert alert-info">

Press the See More Button, If You want more information on this place 
</div>

@foreach($food as $food)

<h1> Resturant Name </h1><h1><strong>{{$food}} </strong></h1> 


<a href="{{ url('/update')}}" class="btn btn-success" role="button">See More Info</i></i> </a>

@endforeach


</div>

</center>

</div>