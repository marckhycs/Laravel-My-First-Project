@extends('base')

@include('nav')

@section('content')

<div class="container">
    <h1>Please Create A New Service</h1>
    <form action="/service" method="POST" > 
        <div class="form-group">
            <input type="text" name='name' class= "form-control" autocomplete="off">
        </div>
        @csrf
        <div class="text-danger">
        @error('name'){{$message}}@enderror
        </div>
        <div>
            <button class="btn btn-info">Add Service</button>
        </div>
    </form>
    <div style="padding-top: 8px">
        <a href="\service"><button class="btn btn-warning">Go Back</button></a>
    </div>
</div>
 @endsection 