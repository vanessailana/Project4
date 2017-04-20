@extends('layouts.app')

@section('content')
   <!DOCTYPE html>
<html>
<head>

</head>
<body>

 <center>
<h1> Hey  {{ Auth::user()->name }}, You have the option to  </h1>

</center>

<div class="container">

<center>

<div class="row">


<a href="{{ url('/food') }}" class="btn btn-primary btn-lg" role="button">Add Restaurants to the System <i class="fa fa-cutlery" aria-hidden="true"></i> </a>


<a href="{{ url('/change' . Auth::user()->id) }}" class="btn btn-success btn-lg" role="button">View Users in the System<i class="fa fa-smile-o" aria-hidden="true"></i> </a>
</div>

</center>
</div>


@endsection
