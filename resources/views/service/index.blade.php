@extends('base')

@include('nav')


@section('content')
<div class="container">
    <div>
        <a href="\service\create"><button class="btn btn-success">Add New</button></a>
    </div>  
    <br>
    <div class="list-group">
        
        <div class="form-row">
            @foreach ($data as $item)
            <div class="col-md-10">
                <a href="\service\{{$item->id}}"><li class="list-group-item">{{ $item->name }}</li></a>
            </div>
            <div class="col-md-1">
            <a href="\service\{{$item->id}}\edit"><button class="btn btn-danger">Edit</button></a>
            </div>
            @endforeach
       
        </div>
    </div>
</div>
@endsection
