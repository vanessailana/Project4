@include('layouts.app')

<div class="container">

<div class="container">

  @foreach($rest as $rest)

            
@if(Auth::guest())

<div class="jumbotron">
<div class="alert alert-success"><h1> <center>Welcome here IS  some information on <kbd> A </kbd> Resturant </div>

</center>


</div>



</h1>


@elseif(Auth::user()->is_admin=='1')



<div class="container">
 
<h1> Info about the following Resturant </h1>


<a href="{{ url('/food'. $rest->rest_id)}}" style="float:right" class="btn btn-success btn-lg" role="button"> Edit Resturant <i class="fa fa-pencil" aria-hidden="true"></i></a></h1>
;
<a href="{{ url('/add_menu_items')}}"style="float:right" class="btn btn-primary btn-lg" role="button"> Add Menu Items <i class="fa fa-pencil" aria-hidden="true"></i></a></h1>




<a href="{{ url('/times')}}" style="float:right" class="btn btn-success btn-lg" role="button"> Add Operating Hours <i class="fa fa-pencil" aria-hidden="true"></i></a></h1>
<p></p>

</div>
@else 

<a href="{{ url('/givereview')}}" style="float:right" class="btn btn-success btn-lg" role="button"> Give Me a Review! <i class="fa fa-pencil" aria-hidden="true"></i></a></h1>






@endif
<center>
<a href="{{ url('/toeat'. $rest->name)}}" style="float:center" class="btn btn-primary btn-lg btn-block" role="button"> View Menu Items 
<i class="fa fa-cutlery" aria-hidden="true"></i></a></h1>

</center>

<p></p>
<center>

<p></p>

</center>
<p></p>

    <tbody>
      <tr>
      <p></p>
      <h1><td><h1> <p></p><kbd> Name of Restaruant </kbd> </h1><h1> {{$rest->name}} </h1></td>   
       
      </tr>
      <tr>
       <h1><td><h1> <kbd> Street Address </kbd> </h1><h1> {{$rest->street_address}} </h1></td>
      </tr>

      {{$rest->id}}
     
      <tr>
       <h1><td><h1> <kbd> City </kbd> </h1><h1>{{$rest->city}} </h1></td>
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
     

  <h1> <kbd> Operating Times  </kbd> </h1>


        @foreach ($users as $users)

        
      <h1> Monday {{$users->Monday}} </h1>

      <h1> Tuesday {{$users->Tuesday}}  </h1>


      <h1> Wednesday {{$users->Wednesday}}  </h1>



      <h1> Thursday {{$users->Thursday}}  </h1>


     
      <h1> Friday {{$users->Friday}}  </h1>



      <h1> Saturday {{$users->Saturday}}  </h1>



      <h1> Sunday {{$users->Sunday}}  </h1>


 
 

         @endforeach

<center>
 <div class="jumbotron">

 <h1> <kbd> reviews! </kbd> </h1>

 </div>

 </center>


@foreach($yum as $yum)
 
 <h1> Resturant Name </h1>
 <h1> {{$yum->rest_name}} </h1>


 <h1><kbd> Tagline </kbd> </h1>
 <h1> {{$yum->tagline}} </h1>


 <h1><kbd> Rating between 1-5 Stars. </kbd> </h1>

 <h3>  1 is Terrible <i class="fa fa-frown-o" aria-hidden="true"></i>  </h3>
      <h3> 5 is Happy and Its Yummy<i class="fa fa-smile-o" aria-hidden="true"></i> </h3>
 </h3>
 <h1> {{$yum->tagline}} </h1>




 <h1><kbd> Body </kbd> </h1>
 <h1> {{$yum->body}} </h1>


 <h1><kbd> Who gave this review?</kbd> </h1>

 <h1> {{$yum->useremail}} </h1>
       


       @endforeach







</center>