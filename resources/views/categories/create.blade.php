@extends('layouts.app')

@section('content')

<div class="container">
<h1> Create Category</h1>
<form class="form-inline" method="post" action="{{action('CategoryController@store')}}">
{!! csrf_field() !!}
  <div class="form-group">
    <label for="exampleInputName2">Name</label>
    <input type="text" name="name" class="form-control" id="exampleInputName2" placeholder="Jane Doe">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail2">Code</label>
    <input type="text" name="code" class="form-control" id="exampleInputEmail2">
  </div>
  <button type="submit" class="btn btn-default">Send</button>
</form>
</div>

@endsection