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


<a href="#" class="btn btn-primary btn-lg" role="button">Add Restaurants to the System <i class="fa fa-cutlery" aria-hidden="true"></i> </a>


<a href="#" class="btn btn-success btn-lg" role="button">Add Restaurants to the System <i class="fa fa-smile-o" aria-hidden="true"></i> </a>
</div>

</center>
</div>


@endsection
