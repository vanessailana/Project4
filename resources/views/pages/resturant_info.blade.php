@include('layouts.app')

<div class="container">

<center>



        <div class="container">

        @foreach($rest as $rest)

            
        <table class="table">
    
    <tbody>
      <tr>
      <h1><td><h1> <kbd> Name of Restaruant </kbd> </h1><h1> {{$rest->name}} </h1></td>
       
      </tr>
      <tr>
       <h1><td><h1> <kbd> Street Address </kbd> </h1><h1> {{$rest->street_address}} </h1></td>
      </tr>
     
      <tr>
       <h1><td><h1> <kbd> City </kbd> </h1><h1> {{$rest->city}} </h1></td>
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