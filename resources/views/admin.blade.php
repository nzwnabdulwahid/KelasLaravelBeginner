@extends('default')

@section('tajuk')
<h1>Page Admin</h1>
@stop

@section('content')
<h1>This is a content area</h1>
<img src="img/p.jpg" alt="">
@include('textinput', ["name" => "ayam"])
@include('textinput', ["name" => "lembu"])

@stop

