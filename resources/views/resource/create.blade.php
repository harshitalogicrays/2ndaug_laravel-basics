@extends('layout.main')
@section('mainsection')
<div class="container mt-5">
    <h1 >  resource create Demo  </h1>
    <form method="post" action="{{route('photos.store')}}"  enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="" class="form-label">Choose file</label>
            <input type="file" class="form-control"  name="image1"  />  </div>
        <button  type="submit"  class="btn btn-primary">Submit</button>      
  </form>
</div>
@endsection