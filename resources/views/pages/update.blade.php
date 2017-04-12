
<html>
   
   <head>
     <title> Change yo password </title>
   </head>

   @include('layouts.app')
   
 <form class="form-horizontal" role="form" method="POST" action="{{ url('user/meow') . Auth::user()->id }}">
                        {{ csrf_field() }}

   <center>

 <h2> Hey {{ Auth::user()->username}} change yo password</h2>


 </center>

               <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                   <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="change" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
       
               <td colspan = '2'>

               <center>

         <button type="submit" class="btn btn-primary" value="change/">
                                    Update!  <i class="fa fa-refresh" aria-hidden="true"></i>
                                </button>


                                </center>
                 
               </td>
            </tr>
     
         </form>

         