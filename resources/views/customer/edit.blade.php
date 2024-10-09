@extends('layout.main')
@section('mainsection')
<div class="container mt-5">

    <div class="card">
        <div class="card-header">    
            <h1 >
            Edit Customer
            <a class="btn btn-primary btn-lg float-end" href="{{url('customer')}}" >View</a
            >
            
            </h1></div>
        <div class="card-body">
           <form method="post" action="{{url('/customer/update/'.$customer->id)}}">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="mb-3 col">
                    <label for="" class="form-label">Name</label>
                    <input type="text" name="name" class="form-control"  value="{{$customer->name}}"/>
                    @error('name')
                    <small  class="text-danger">{{$message}}</small>
                    @enderror
                   
                </div>
                <div class="mb-3 col">
                    <label for="" class="form-label">Email</label>
                    <input type="text" name="email" class="form-control"  value="{{$customer->email}}" readonly/>
                    @error('email')
                    <small  class="text-danger">{{$message}}</small>
                    @enderror
                </div>
            </div>
            <div class="row">
                <div class="mb-3 col">
                    <label for="" class="form-label">DOB</label>
                    <input type="date" name="dob" class="form-control" value={{$customer->dob}} />
                    <small  class="text-danger"></small>
                </div>
                <div class="mb-3 col">
                    <label for="" class="form-label">Mobile</label>
                    <input type="text" name="mobile" class="form-control" value="{{$customer->mobile}}"/>
                    @error('mobile')
                    <small  class="text-danger">{{$message}}</small>
                    @enderror
                </div>
            </div>  
            <div class="row">
                <div class="mb-3 col">
                    <label for="" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" value={{$customer->password}}/>
                    @error('password')
                    <small  class="text-danger">{{$message}}</small>
                    @enderror
                </div>
                <div class="mb-3 col">
                    <label for="" class="form-label">Confirm Password</label>
                    <input type="password" name="cpassword" class="form-control"  value={{$customer->password}}/>
                    @error('cpassword')
                <small  class="text-danger">{{$message}}</small>
                @enderror
                </div>
            </div>
  <div class="mb-3">
                <label for="" class="form-label me-2">Gender:</label>
                <div class="form-check form-check-inline">
                    <input class="form-check-input"
                        type="radio" name="gender" value="M" 
                        {{$customer->gender=='M'?'checked':''}}
                        />
                    <label class="form-check-label">Male</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input"
                        type="radio" name="gender" value="F"
                        {{$customer->gender=='F'?'checked':''}} />
                    <label class="form-check-label" for="">Female</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input"
                        type="radio" name="gender" value="O"
                        {{$customer->gender=='O'?'checked':''}} />
                    <label class="form-check-label" for="">Other</label>
                </div>
                <br/>
               
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Address</label>
                <textarea class="form-control" name="address"  rows="3">{{$customer->address}}</textarea>
            </div>
            
            <button type="submit" class="btn btn-primary"> Update</button>
            
           </form>
        </div>
        
    </div>
    
</div>
@endsection