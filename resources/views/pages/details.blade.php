
@include('layouts.app')

<div class="container">

<center>



<h1>All Resturants on This Website </h1>

@if(Auth::guest())

<div class="jumbotron">

<h1>
Press the See More Button, If You want more information on this place 
</h1>
</div>


@elseif(Auth::user()->is_admin=='1')


<div class="alert alert-info">

<div class="jumbotron">
<h1> Hello! {{Auth::user()->name}}
Press the See More Button, To view more details about the resturant. Also you can edit details about it! </h1> </div> 
</div>

@else

<div class="alert alert-info">
<div class="jumbotron">
 <h2>Press the See More button to View more information on the resturant and give review </h2></div> 
</div>

@endif



@foreach($food as $food)

<h1> Resturant Name </h1><h1><strong>{{$food->name}} </strong></h1> 



<a href="{{ url('/info'. $food->name)}}" class="btn btn-success btn-lg" role="button"> Read More Information on the Resturant <i class="fa fa-bullseye" aria-hidden="true"></i></a>


@endforeach

<ul>
  
</ul>




</div>

</center>

</div>