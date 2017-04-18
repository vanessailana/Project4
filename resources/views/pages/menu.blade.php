@include('layouts.app')

<div class="container">

<div class="container">




  @foreach($food as $food)


<div class="jumbotron">

 <h1> Menu Items For The {{$food->rest_name}} </h1> 

 </div>

   
    <tbody>
      <tr>
      <p></p>
      <h1><td><h1> <p></p><kbd> Item Name </kbd> </h1><h1> {{$food->item}} </h1></td>   
       
      </tr>
      <tr>
       <h1><td><h1> <kbd> Description </kbd> </h1><h1> {{$food->description}} </h1></td>
      </tr>

   
     
      <tr>
       <h1><td><h1> <kbd> Price </kbd> </h1><h1>{{$food->price}} </h1></td>
      </tr>

       
    </tbody>
 

         @endforeach

       







</center>