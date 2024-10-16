<div  {{$attributes->merge(['class'=>"alert alert-$type fade show alert-dismissible" ])}} 
id="{{$id}}">
  {{$message}}
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
{{-- {{$attributes}} --}}