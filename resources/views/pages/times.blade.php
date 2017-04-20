@extends('layouts.app')


@section('content')

  
      
 <form class="form-horizontal" role="form" method="" action="{{ url('/i') }}">

<div class="container">
 <center>
<h1> Please Fill in the Times That The Restaurant is Opened at</h1>
<h2> If You are closed on a Specfic Day, Just Type Closed So <kbd> NO </kbd> Customer is confused </h2>

</center>

</div>

                        {{ csrf_field() }}

<div class="form-group{{ $errors->has('restname') ? ' has-error' : '' }}">
     <label for="restname" class="col-md-4 control-label">Resturant Name</label>

                            <div class="col-md-6">
                                <input id="restname" maxlength="255" type="text" class="form-control" name="restname" required>

                                @if ($errors->has('restname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('restname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


        <div class="form-group{{ $errors->has('Monday') ? ' has-error' : '' }}">
     <label for="name" class="col-md-4 control-label">Monday</label>

                            <div class="col-md-6">
                                <input id="Monday" maxlength="255" type="text" class="form-control" name="Monday" required>

                                @if ($errors->has('Monday'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Monday') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>



        <div class="form-group{{ $errors->has('Tuesday') ? ' has-error' : '' }}">
     <label for="name" class="col-md-4 control-label">Tuesday</label>

                            <div class="col-md-6">
                                <input id="Tuesday" maxlength="255" type="text" class="form-control" name="Tuesday" required>

                                @if ($errors->has('Tuesday'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Tuesday') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>



        <div class="form-group{{ $errors->has('Wednesday') ? ' has-error' : '' }}">
     <label for="name" class="col-md-4 control-label">Wednesday</label>

                            <div class="col-md-6">
                                <input id="Wednesday" maxlength="255" type="text" class="form-control" name="Wednesday" required>

                                @if ($errors->has('Wednesday'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Wednesday') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>



        <div class="form-group{{ $errors->has('Thursday') ? ' has-error' : '' }}">
     <label for="name" class="col-md-4 control-label">Thursday</label>

                            <div class="col-md-6">
                                <input id="Thursday" maxlength="255" type="text" class="form-control" name="Thursday" required>

                                @if ($errors->has('Thursday'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Thursday') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


        <div class="form-group{{ $errors->has('Friday') ? ' has-error' : '' }}">
     <label for="name" class="col-md-4 control-label">Friday</label>

                            <div class="col-md-6">
                                <input id="Friday" maxlength="255" type="text" class="form-control" name="Friday" required>

                                @if ($errors->has('Friday'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Friday') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>



        <div class="form-group{{ $errors->has('Saturday') ? ' has-error' : '' }}">
     <label for="name" class="col-md-4 control-label">Saturday</label>

                            <div class="col-md-6">
                                <input id="Saturday" maxlength="255" type="text" class="form-control" name="Saturday" required>

                                @if ($errors->has('Saturday'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Saturday') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>





        <div class="form-group{{ $errors->has('Sunday') ? ' has-error' : '' }}">
     <label for="name" class="col-md-4 control-label">Sunday</label>

                            <div class="col-md-6">
                                <input id="Sunday" maxlength="255" type="text" class="form-control" name="Sunday" required>

                                @if ($errors->has('Sunday'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Sunday') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>




                        
                        
               <center>

         <h1><button type="submit" class="btn btn-primary btn-lg">
                                    Add Operating Times </i>
                                </button> </h1>


                                </center>
                 
               </td>
            </tr>
     
         </form>

         
@endsection