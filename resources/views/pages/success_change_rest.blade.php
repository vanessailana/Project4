

@include('layouts.app')


<div class="container">

<center>

<div class="alert alert-success">

<h1> Yay, You Just Updated One Of The Resturants</h1>

<h1> Press the Green Button to Go Back To the list of resturants
Because maybe their is another place you want to <kbd>update. </kbd> Since you are the admin {{Auth::user()->name}}, you have the <i class="fa fa-bolt" aria-hidden="true"></i> </h1>



</center>

<center>


<a href="{{ url('/detail')}}" class="btn btn-success btn-lg" role="button">Return to the Screen to See the Resturants, because knowing you might want to change something  <i class="fa fa-smile-o" aria-hidden="true"></i></i> </a>


</center>


</div>

</div>
