@include('layouts.app')

<div class="container">



        <div class="container">

        @foreach($rest as $rest)

            
@if(Auth::guest())

<h1> <center>Welcome here some information on the following Resturant

</center> </h1>


@elseif(Auth::user()->is_admin=='1')



<div class="container">
 
<h1> Info about the following Resturant </h1>


<a href="{{ url('/change'. $rest->rest_id)}}" style="float:right" class="btn btn-success btn-lg" role="button"> Edit Resturant <i class="fa fa-pencil" aria-hidden="true"></i></a></h1>
;
<a href="#" style="float:right" class="btn btn-primary btn-lg" role="button"> Add Menu Items <i class="fa fa-pencil" aria-hidden="true"></i></a></h1>


<a href="#" style="float:right" class="btn btn-success btn-lg" role="button"> Add Operating Hours <i class="fa fa-pencil" aria-hidden="true"></i></a>

<p></p>

</div>
@else 

<a href="#" style="float:right" class="btn btn-success btn-lg" role="button"> Give Me a Review! <i class="fa fa-pencil" aria-hidden="true"></i></a></h1>



@endif
    <tbody>
      <tr>
      <h1><td><h1> <kbd> Name of Restaruant </kbd> </h1><h1> {{$rest->name}} </h1></td>
       
      </tr>
      <tr>
       <h1><td><h1> <kbd> Street Address </kbd> </h1><h1> {{$rest->street_address}} </h1></td>
      </tr>

      {{$rest->id}}
     
      <tr>
       <h1><td><h1> <kbd> City </kbd> </h1><h1> </h1></td>
      </tr>

       <tr>
       <h1><td><h1> <kbd> State </kbd> </h1><h1> {{$rest->state}} </h1></td>
      </tr>
    </tbody>

    <tr>
       <h1><td><h1> <kbd> Zipcode </kbd> </h1><h1> {{$rest->zipcode}} </h1></td>
      </tr>

        <tr>
       <h1><td><h1> <kbd> website </kbd> </h1><h1> {{$rest->website}} </h1></td>
      </tr>
  </table>

        @endforeach








</center>