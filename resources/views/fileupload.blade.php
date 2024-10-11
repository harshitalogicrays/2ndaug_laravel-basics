@extends('layout.main')
@section('mainsection')
<div class="container mt-5">
    <h1 >
      File Upload Demo 
    </h1>
    <form enctype="multipart/form-data" method="post" action="{{url('/fileupload')}}">
        @csrf
        <div class="mb-3">
            <label for="" class="form-label">Choose file</label>
            <input type="file" class="form-control"  name="image"  />
        </div>
        <button  type="submit"  class="btn btn-primary">Submit</button>
        
  </form>
</div>
@endsection