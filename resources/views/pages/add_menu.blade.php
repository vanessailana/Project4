@extends('layouts.app')


@section('content')

  
      
 <form class="form-horizontal" role="form" method="" action="{{ url('/o') }}">

<div class="container">

<center>

 <h1> Add A MENU ITEM FOR THE RESTAURANT NAME YOU WANT </h1>


</center>

</div>


                        {{ csrf_field() }}

        <div class="form-group{{ $errors->has('rest_name') ? ' has-error' : '' }}">
     <label for="rest_name" class="col-md-4 control-label">Restaurant Name</label>

                            <div class="col-md-6">
                                <input id="rest_name" maxlength="255" type="text" class="form-control" name="rest_name" required>

                                @if ($errors->has('rest_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('rest_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                          {{ csrf_field() }}

        <div class="form-group{{ $errors->has('item') ? ' has-error' : '' }}">
     <label for="item" class="col-md-4 control-label">Item Name</label>

                            <div class="col-md-6">
                                <input id="item" maxlength="255" type="text" class="form-control" name="item" required>

                                @if ($errors->has('item'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('item') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


        <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
     <label for="description" class="col-md-4 control-label">Description of the Item</label>



                            <div class="col-md-6">
                                <input id="description" maxlength="255" type="text" class="form-control" name="description" required>

                                @if ($errors->has('description'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


        <div class="form-group{{ $errors->has('price') ? ' has-error' : '' }}">
     <label for="price" class="col-md-4 control-label">Price</label>



                            <div class="col-md-6">
                                <input id="price" maxlength="255" type="text" class="form-control" placeholder="$$$$$$" name="price" required>

                                @if ($errors->has('price'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('price') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>



                        
                        
               <center>

         <h1><button type="submit" class="btn btn-primary btn-lg">
                                   Add an Item </i>
                                </button> </h1>


                                </center>
                 
               </td>
            </tr>
     
         </form>

         
@endsection