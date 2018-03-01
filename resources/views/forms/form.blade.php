@extends('layouts.app')

@section('content')

<div class="container">
<h1> Create Category</h1>
<form class="form-inline" method="post" action="{{action('ArticleController@store')}}">
{!! csrf_field() !!}
  <div class="form-group">
    <label for="exampleInputName2">Title</label>
    <input type="text" name="title" class="form-control" id="exampleInputName2" placeholder="Jane Doe">
  </div>
  <div class="form-group">
  <select name="category">
  <option value="1">Travel</option>
  </select>
  </div>
  <div class="form-group">
    <label for="exampleInputName2">Text</label>
    <textarea class="form-control" id="exampleInputText2" placeholder="Your Article"></textarea>
  </div>
  <button type="submit" class="btn btn-default">Send</button>
</form>
</div>

@endsection