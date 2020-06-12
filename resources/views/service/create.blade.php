@extends('base')

@include('nav')

@section('content')
    <h1>Please Create A New Service</h1>
    <form action="/service" method="POST"> 
        <input type="text" name='name'>
        <button type='submit' autocomplete="off">Add Service</button>
        @csrf
    </form>
    @error('name')
        {{$message}}
    @enderror
 @endsection 