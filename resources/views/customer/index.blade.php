@extends('layout.main')
@section('mainsection')
<div class="container mt-5">

    @if (session('message'))
    <x-alert type="success" message="{{session('message')}}"></x-alert>
    @endif

    <div class="row">
        <div class="col-2">
            <h6>Fetch By Gender</h6 >
            <div class="form-check">
                <input class="form-check-input" type="radio" value="M" name="gender"/>
                <label class="form-check-label" for=""> Male </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" value="F" name="gender"/>
                <label class="form-check-label" for=""> Female </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" value="O" name="gender"/>
                <label class="form-check-label" for=""> Other </label>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <div class="card-header">    
                    <h1 >
                    View Customers
                    <a class="btn btn-danger btn-lg float-end me-2" 
                    href="{{url('customer/trash')}}" >Go to Trash</a
                    >
                    <a class="btn btn-primary btn-lg float-end me-2" 
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
                                    href="{{url('/customer/edit/'.$c->id)}}" class="btn btn-success me-2"> <i class="bi bi-pencil-square"></i> </a>
        
                                    <a type="button"  class="btn btn-danger" href="{{url('/customer/delete/'.$c->id)}}"
                                    onclick="return window.confirm('are you sure to delete this??')"> <i class="bi bi-trash"></i> </a>
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
    </div>
   
</div>
@endsection