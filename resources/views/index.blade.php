@extends('layout.main')
@section('mainsection')
@php
    $id="101";
@endphp
<div class="container mt-5">
  
    @if (session('message'))
    <x-alert message="{{session('message')}}" :id="$id" class="fw-bold text-center "></x-alert>

    <x-alert type="danger" message="{{session('message')}}" class="text-end" name="rrr"></x-alert>

    <x-alert type="success" message="{{session('message')}}"></x-alert> 

    @endif
    <h1 class="text-primary">
        Home Page
    </h1>
</div>
@endsection