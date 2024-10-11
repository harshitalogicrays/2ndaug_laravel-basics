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
            Trashed Customers
            <a class="btn btn-danger btn-lg float-end" 
            href="{{url('customer')}}" >Back</a
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
                        <th>status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($customers as $c)
                    <tr> <td>{{$c->id}}</td>
                        <td>{{$c->name}}</td>
                        <td>{{$c->email}}</td>
                        <td>{{$c->dob ? formattedDate('D d-M-Y',$c->dob) : 'NA'}}</td>
                        <td>{{$c->mobile}}</td>
                        <td>  @if ($c->gender=='M')
                        <span class="badge rounded-pill text-bg-primary">Male</span >
                            @elseif($c->gender=='F')
                            <span class="badge rounded-pill text-bg-warning">Female</span >
                            @else   
                            <span class="badge rounded-pill text-bg-info">Other</span >
                            @endif
                        </td>
                        <td> @if ($c->status=='1')
                            <span class="badge rounded-pill text-bg-success">Active</span >
                            @else
                            <span class="badge rounded-pill text-bg-danger">Inactive</span > 
                            @endif
                        </td>
                        <td>
                            <a type="button" 
                            href="{{url('/customer/restore/'.$c->id)}}" class="btn btn-success me-2"> Restore </a>

                            <a type="button"  class="btn btn-danger" href="{{url('/customer/fdelete/'.$c->id)}}"
                            onclick="return window.confirm('are you sure to delete this??')"> Delete </a>
                        </td></tr>
                    @empty
                      <tr><td colspan="8" align="center">No customer found</td></tr>  
                    @endforelse
                   
                </tbody>
            </table>
           </div>
           {{$customers->links('pagination::bootstrap-5')}}
        </div>
        
    </div>
</div>
@endsection