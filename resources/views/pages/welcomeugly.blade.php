@extends('layouts.app')

@section('content')
<div class="container">
   <!DOCTYPE html>
<html>
<head>

</head>
<body>

<h1> We all are food critics at heart <i class="fa fa-heart-o" aria-hidden="true"></i>
 </h1>

<h1> Welcome  {{ Auth::user()->username }}! </h1>

<iframe width="900" height="345" src="https://www.youtube.com/embed/8Pw8B-0tg5E?autoplay=1">
</iframe>

</body>
</html>

</div>
@endsection
