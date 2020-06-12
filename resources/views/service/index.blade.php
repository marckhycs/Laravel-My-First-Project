@extends('base')

@include('nav')


@section('content')
<div class="container">
    <div>
        <a href="\service\create"><button class="btn btn-success">Add New</button></a>
    </div>  
    <br>
    <div class="list-group">
    @foreach ($data as $item)
       <a href="\service\{{$item->id}}"><li class="list-group-item">{{ $item->name }}</li></a>
    @endforeach
    </div>
</div>
@endsection
