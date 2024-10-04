@extends('layout.main')
@section('mainsection')
<div class="container mt-5">

    @if (session('message'))
    <div class="alert alert-success alert-dismissible fade show">
            {{session('message')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif
    <div class="card">
        <div class="card-header">    
            <h1 >
            View Customers
            <a class="btn btn-danger btn-lg float-end" 
            href="{{url('customer/add')}}" >Add</a
            >
            
            </h1></div>
        <div class="card-body">
           <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover" >
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th>DOB</th><th>Mobile</th>
                        <th>Gender</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="">
                        <td>R1C1</td>
                        <td>R1C2</td>
                        <td>R1C3</td>
                        <td>Item</td>
                        <td>Item</td>
                        <td>Item</td>
                        <td>Item</td>
                    </tr>
                </tbody>
            </table>
           </div>
           
        </div>
        
    </div>
</div>
@endsection