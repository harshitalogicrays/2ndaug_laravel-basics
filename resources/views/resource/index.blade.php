@extends('layout.main')
@section('mainsection')
<div class="container mt-5">
    @if (session('message'))
    <div class="alert alert-success alert-dismissible fade show">
            {{session('message')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif
    <h1 >
      resource controller demo
      <a class="btn btn-primary" href="{{route('photos.create')}}"  >Button</a
      >
      
    </h1>
</div>
@endsection