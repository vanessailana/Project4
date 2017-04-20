@extends('layouts.app')


@section('content')

  
      
 <form class="form-horizontal" role="form"  action="{{ url('/hi') }}">

<div class="container">

<center>

 <h1> Give a Review  </h1>


</center>

</div>


                        {{ csrf_field() }}

        <div class="form-group{{ $errors->has('useremail') ? ' has-error' : '' }}">
     <label for="useremail" class="col-md-4 control-label"> Enter Your Unique User Email So You get Credit For the Review </label>

                            <div class="col-md-6">
                                <input id="useremail" maxlength="255" type="text" class="form-control" name="useremail" required>

                                @if ($errors->has('useremail'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('useremail') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


    <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
     <label for="username" class="col-md-4 control-label"> Enter Your <kbd> Unique and Cool  Username </kbd></label>

                            <div class="col-md-6">
                                <input id="username" maxlength="255" type="text" class="form-control" name="username" required>

                                @if ($errors->has('username'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
   <div class="form-group{{ $errors->has('city') ? ' has-error' : '' }}">
     <label for="username" class="col-md-4 control-label">City  </label>

                            <div class="col-md-6">
                                <input id="city" maxlength="255" type="text" style="width:100px" class="form-control" name="city" required>

                                @if ($errors->has('city'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('city') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                          {{ csrf_field() }}

        <div class="form-group{{ $errors->has('rest_name') ? ' has-error' : '' }}">
     <label for="item" class="col-md-4 control-label"> What is the Resturant Name??</label>

                            <div class="col-md-6">
                                <input id="rest_name" maxlength="255" type="text" class="form-control" name="rest_name" required>

                                @if ($errors->has('rest_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('rest_name') }}</strong>
                                    </span>
                                @endif

                            </div>




                        </div>

  <label for="inputsm" class="col-md-4 control-label">Rating Value Please Enter an Integer Between 1 and 5. 1 Being terrible and 5 being Yummy</label>
        <div class="form-group{{ $errors->has('rating_value') ? ' has-error' : '' }}">
     


                            <div class="col-md-6">
                                <input id="rating_value" maxlength="255" type="integer" class="form-control input-sm" name="rating_value" required style="width:100px">

                                @if ($errors->has('rating_value'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('rating_value') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


        <div class="form-group{{ $errors->has('tagline') ? ' has-error' : '' }}">
     <label for="tagline" class="col-md-4 control-label">Tagline? What do You Think</label>



                            <div class="col-md-6">
                                <input id="tagline" maxlength="255" type="text" class="form-control" style="width:200px" name="tagline" required>

                                @if ($errors->has('tagline'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('tagline') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>



   <div class="form-group{{ $errors->has('body') ? ' has-error' : '' }}">
     <label for="body" class="col-md-4 control-label">So....</label>



                            <div class="col-md-6">
                                 <input id="body" maxlength="255" type="text" class="form-control" style="width:400px; height:200px" name="body" required>

                                @if ($errors->has('body'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('body') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>





                        
                        
               <center>

         <h1><button type="submit" class="btn btn-primary btn-lg btn-block">
                                   Add Your Rating. We love feedback  </i>
                                </button> </h1>


                                </center>
                 
               </td>
            </tr>
     
         </form>

         
@endsection