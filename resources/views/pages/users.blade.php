

@include('layouts.app')

<div class="container">

<center>


<div class="container">

<h1> Each user has a unique email </h1>

<h1> Users <kbd> Are Listed By Email </kbd> <i class="fa fa-users" aria-hidden="true"></i> </h1>

@foreach($users as $users)



<h1> <strong> Email </strong> {{ $users }} 



<p></p>



</h1>



@endforeach


</div>


</table>

</center>

<center>


</center>


</div>

</div>



