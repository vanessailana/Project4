@extends('layouts.app')


@section('content')

  
 <form class="form-horizontal" role="form" method="" action="{{ url('admin/rest') }}">


                        {{ csrf_field() }}

        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
     <label for="name" class="col-md-4 control-label">Restaurant Name</label>

                            <div class="col-md-6">
                                <input id="name" maxlength="255" type="text" class="form-control" name="name" required>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                          <div class="form-group{{ $errors->has('street_address') ? ' has-error' : '' }}">
     <label for="street_address" class="col-md-4 control-label">Street Address
     </label>

                            <div class="col-md-6">
                                <input id="street_address" type="text"  maxlength="255" class="form-control" name= "street_address" required>

                                @if ($errors->has('street_address'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('street_address') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
       

         <div class="form-group{{ $errors->has('city') ? ' has-error' : '' }}">
     <label for="city" class="col-md-4 control-label">City
     </label>

                            <div class="col-md-6">
                                <input id="city"  maxlength="255"  type="text" class="form-control" name= "city" required>

                                @if ($errors->has('city'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('city') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                          <div class="form-group{{ $errors->has('state') ? ' has-error' : '' }}">
     <label for="state" class="col-md-4 control-label">State
     </label>

                            <div class="col-md-6">
                                <input id="state" maxlength="255" type="text" class="form-control" name= "state" required>

                                @if ($errors->has('state'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('state') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                              <div class="form-group{{ $errors->has('website') ? ' has-error' : '' }}">
     <label for="website" class="col-md-4 control-label">Website
     </label>

                            <div class="col-md-6">
                                <input id="website"  type="url"  class="form-control" maxlength="300" name= "website" required>

                                @if ($errors->has('website'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('website') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                   <div class="form-group{{ $errors->has('zipcode') ? ' has-error' : '' }}">
     <label for="zipcode" class="col-md-4 control-label">Zipcode
     </label>

                    <div class="col-md-6">
                    <input id="zipcode"  type="number" maxlength="8" class="form-control" name= "zipcode" required>

                                @if ($errors->has('zipcode'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('zipcode') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
               <td colspan = '2'>

               <center>

         <button type="submit" class="btn btn-primary">
                                    Update!  <i class="fa fa-refresh" aria-hidden="true"></i>
                                </button>


                                </center>
                 
               </td>
            </tr>
     
         </form>

         
@endsection