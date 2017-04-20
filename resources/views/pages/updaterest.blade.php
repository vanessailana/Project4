  
@include('layouts.app')

<div class="container">



  @foreach ($food as $food)
  
 <form class="form-horizontal" role="form" method="GET" action="{{ url('/edit') . $food->rest_id }}">


 <h1> Let's Update Some Info</h1>

 <div class="jumbotron">

<h1><kbd>   Listen, just type in the necessary fields that you want to update regarding {{$food->name}} Restuarant </kbd> </h1>



 </div>

         


         <h1> Name </h1>


               <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
               

                            <div class="col-md-6">
                                <input id="name"  placeholder={{$food->name}} required class="form-control" name="name" >

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


     <h1> Street Address </h1>

      <div class="form-group{{ $errors->has('street_address') ? ' has-error' : '' }}">
               

                            <div class="col-md-6">
                                <input id="street_address"  placeholder="{{$food->street_address}}" class="form-control" name="street_address">

                                @if ($errors->has('street_address'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('street_address') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>




     <h1> City </h1>

      <div class="form-group{{ $errors->has('city') ? ' has-error' : '' }}">
               

                            <div class="col-md-6">
                                <input id="city" placeholder="{{$food->city}}" class="form-control" name="city">

                                @if ($errors->has('city'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('city') }}</strong>
                                    </span>
                                @endif
                            </div>

                        </div>

     <h1> State </h1>

      <div class="form-group{{ $errors->has('state') ? ' has-error' : '' }}">
              

                            <div class="col-md-6">
                                <input id="state" placeholder="{{$food->state}}"  class="form-control" name="state">

                                @if ($errors->has('state'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('state') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


        <h1> Zipcode </h1>

      <div class="form-group{{ $errors->has('zipcode') ? ' has-error' : '' }}">
              

                            <div class="col-md-6">
                                <input id="zipcode" placeholder=" {{$food->zipcode}}" class="form-control" name="zipcode">

                                @if ($errors->has('zipcode'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('zipcode') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


<h1> Website </h1>
     <div class="form-group{{ $errors->has('website') ? ' has-error' : '' }}">
              

                            <div class="col-md-6">
                                <input id="website" type="" class="form-control" placeholder="{{$food->website}}" name="website">

                                @if ($errors->has('website'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('website') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>




           <center>
               <td colspan = '2'>

               <center>

         <button type="submit" class="btn btn-primary btn-lg btn-block" >
                                   <h1> Update!  <i class="fa fa-refresh" aria-hidden="true"></h1></i>
                                </button>


                                </center>


                                </td>
</center>

</form>

</div>
@endforeach