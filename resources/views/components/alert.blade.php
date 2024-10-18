<div  {{$attributes->merge(['class'=>"alert alert-$type fade show alert-dismissible" ])}} 
id="{{$id}}">
  {{-- {{$message}} --}}
  {{-- {{$slot}} --}}
@isset($heading)
    {{$heading}}
@endisset

@if ($dismissible==true)
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
@endif

</div>
{{-- {{$attributes}} --}}