@extends('base')

@include('nav')

@section('content')
<a href="\service\create"><button>Add New</button></a>
    @foreach ($data as $item)
        <li>{{ $item->name }}</li>
    @endforeach
@endsection