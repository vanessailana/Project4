

@include('layouts.app')

<div class="container">

<center>


<div class="container">

<div class="jumbotron">


<h1> User Accounts Are  <kbd> Are Listed By Email </kbd> <i class="fa fa-users" aria-hidden="true"></i> </h1>



<h1> So you have the power to promote a user to an admin like yourself {{Auth::user()->name}} 
</h1>


</div>
</div>






@foreach($users as $users)

<h1> {{$users->email}} </h1>



  @if($users->is_admin=='0')


<a href="{{ url('/change' . $users->name)}}" onclick="alert('You have just changed this user's status)" class="btn btn-primary btn-lg" role="button"> Promote {{$users->name}} </a>





@endif




@endforeach




