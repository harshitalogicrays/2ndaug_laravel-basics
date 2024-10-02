@extends('layout.main')
@section('mainsection')
<div class="container mt-5">
    <div class="card">
        <div class="card-header">    
            <h1 >
            View Customers
            <a class="btn btn-danger btn-lg float-end" 
            href="{{url('customer/add')}}" >Add</a
            >
            
            </h1></div>
        <div class="card-body">
            <h4 class="card-title">Title</h4>
            <p class="card-text">Text</p>
        </div>
        
    </div>
</div>
@endsection