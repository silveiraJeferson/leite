@extends('hackathon.layout.welcome')
@section('content')
<ul class="nav nav-pills">
  <li role="presentation" class="active"><a href="{{url('/vacas')}}">Lista</a></li>
  <li role="presentation"><a href="#">Profile</a></li>
  <li role="presentation"><a href="#">Messages</a></li>
</ul>

@endsection