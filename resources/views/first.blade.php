<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
    <h1 class="text-primary">My First Blade File</h1>
    {{-- <h2>{{$name}}</h2> --}}
    {{-- <h2>{{$username}}</h2>
    <h3>{{$address}}</h3>
    <h3>{!! $email !!}</h3> --}}

    {{-- @if ($username=="Ram")
        <p>Welcome {{$username}}</p>
        <b>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae repellat ex, cum voluptas minima a temporibus, aliquam dolore facilis non optio eos id reiciendis nesciunt distinctio quos corrupti commodi! Nisi!</b>
    @elseif($username=="Happy")
        <p>Welcome Happy Singh</p>
    @else
        <p>Welcome Guest</p>
    @endif --}}

    {{-- @php
        print_r($sports);
    @endphp --}}


    {{-- @for ($i = 1; $i <= 10; $i++)
        {{$i*2}}<br>
    @endfor --}}

    {{-- @foreach ($sports as $s)
        <h4>{{$s}}</h4>
    @endforeach --}}

{{-- @forelse ($sports as $s)
    <h4>{{$s}}</h4>
@empty
        <h4>No sports found</h4>
@endforelse --}}

        @switch($username)
            @case("Happy")
                <p>hello happy</p>
                @break
            @case("LRA")
                    hello LRA
                @break
            @case("Ram")
                    hello Ram
                @break
            @default
                no username found
        @endswitch

        
</div>
</body>
</html>