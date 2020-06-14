@extends('base')

@include('nav')

@section('content')

<div class="container">
    <h1>Edit Service</h1>
    <form action="/service/{{$services->id}}" method="POST" > 
        @method('PATCH')
        <div class="form-group">
            <input type="text" name='name' class= "form-control" autocomplete="off" value="{{$services->name}}">
        </div>
        @csrf
        <div class="text-danger">
        @error('name'){{$message}}@enderror
        </div>
        <div>
            <button class="btn btn-info">Edit Service</button>
        </div>
    </form>
    <div style="padding-top: 8px">
        
         <a href="\service\{{$services->id}}"><button class="btn btn-warning">Go Back</button></a>
    </div>
</div>
 @endsection 