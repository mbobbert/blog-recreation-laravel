@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="jumbotron">
                    <div class="container">
                        <h1>Hello, world!</h1>
                        <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
                        <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more »</a></p>
                    </div>
                </div>
                <div class="container">
      <!-- Example row of columns -->
                <div class="row">
                @foreach($categories as $category)
                    <div class="col-md-4">
                    <h2>{{ $category->name}}</h2>
                    <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                    <p><a class="btn btn-default" href="#" role="button">View details »</a></p>
                    </div>
                    
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection


<!--<div class="card-body">
    <!--@if (session('status'))
        <!--<div class="alert alert-success">
            <!--{{ session('status') }}
        <!--</div>
    <!--@endif
<!--
    <!--You are logged in!
<!--</div>