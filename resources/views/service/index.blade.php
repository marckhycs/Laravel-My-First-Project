@extends('base')

@include('nav')

@section('content')
    <h1>Hello This is Services</h1>
    <form action="/service" method="POST"> 
        <input type="text" name='name'>
        <button type='submit' autocomplete="off">Add Service</button>
        @csrf
    </form>
    @error('name')
        {{$message}}
    @enderror
    @foreach ($data as $item)
        <li>{{ $item->name }}</li>
    @endforeach
@endsection