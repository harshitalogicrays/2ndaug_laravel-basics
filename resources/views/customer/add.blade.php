@extends('layout.main')
@section('mainsection')
<div class="container mt-5">

    <div class="card">
        <div class="card-header">    
            <h1 >
            Add Customer
            <a class="btn btn-primary btn-lg float-end" href="{{url('customer')}}" >View</a
            >
            
            </h1></div>
        <div class="card-body">
           <form>
            <div class="row">
                <div class="mb-3 col">
                    <label for="" class="form-label">Name</label>
                    <input type="text" name="name" class="form-control" />
                    <small  class="text-danger"></small>
                </div>
                <div class="mb-3 col">
                    <label for="" class="form-label">Email</label>
                    <input type="text" name="email" class="form-control" />
                    <small  class="text-danger"></small>
                </div>
            </div>
            <div class="row">
                <div class="mb-3 col">
                    <label for="" class="form-label">DOB</label>
                    <input type="date" name="dob" class="form-control" />
                    <small  class="text-danger"></small>
                </div>
                <div class="mb-3 col">
                    <label for="" class="form-label">Mobile</label>
                    <input type="text" name="mobile " class="form-control" />
                    <small  class="text-danger"></small>
                </div>
            </div>  
            <div class="row">
                <div class="mb-3 col">
                    <label for="" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" />
                    <small  class="text-danger"></small>
                </div>
                <div class="mb-3 col">
                    <label for="" class="form-label">Confirm Password</label>
                    <input type="password" name="cpassword" class="form-control" />
                    <small  class="text-danger"></small>
                </div>
            </div>
            <div class="mb-3">
                <label for="" class="form-label me-2">Gender:</label>
                <div class="form-check form-check-inline">
                    <input class="form-check-input"
                        type="radio" name="gender" value="male" />
                    <label class="form-check-label" for="">Male</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input"
                        type="radio" name="gender" value="female" />
                    <label class="form-check-label" for="">Female</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input"
                        type="radio" name="gender" value="other" />
                    <label class="form-check-label" for="">Other</label>
                </div>
                <br/>
                <small  class="text-danger"></small>
            </div>
            <button type="submit" class="btn btn-primary"> Submit</button>
            
           </form>
        </div>
        
    </div>
    
</div>
@endsection