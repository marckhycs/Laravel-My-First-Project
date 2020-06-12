@extends('base')

@include('nav')
@section('content')

<div class="container">
    <a href="\service"><button class="btn btn-danger">Go Back</button></a>
    <div class="text-info">
        <h1>Name: {{$services->name}}</h1>
    </div>
</div>