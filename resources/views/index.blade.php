@extends('layout.main')
@section('mainsection')
@php
    $id="101";
@endphp
<div class="container mt-5">
  
    @if (session('message'))
    <x-alert message="{{session('message')}}" :id="$id" class="fw-bold text-center ">
        <x-slot:heading>Alert Message</x-slot>
        <h3>{{session('message')}}</h3>
    </x-alert>

    <x-alert type="danger" message="{{session('message')}}" class="text-end" name="rrr"></x-alert>

    <x-alert type="success" message="{{session('message')}}" dismissible={{true}}></x-alert> 

    @endif
    <h1 class="text-primary">
        Home Page
        <x-inlinecomp title="this is a demo of inline component"></x-inlinecomp>
    </h1>
</div>
@endsection