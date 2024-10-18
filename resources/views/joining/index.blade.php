@extends('layout.main')
@section('mainsection')
<div class="container mt-5">
    <h1 >
        SQL join (join more than 2 tables)
    </h1><hr/>
    <div class="table-responsive" >
        <table  class="table table-bordered table-striped table-hover" >
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Mobile</th>
                    <th>Course</th>
                </tr>
            </thead>
            <tbody>
   @forelse ($students as $s)
       
                    <tr class="">
                        <td scope="row">{{$s->id}}</td>
                        <td>{{$s->name}}</td>
                        <td>{{$s->mobile}}</td>
                        <td>{{$s->coursename}}</td>
                    </tr>
   @empty
       <h1>No Student Found</h1>
   @endforelse
</tbody>
</table>
</div>
</div>
@endsection