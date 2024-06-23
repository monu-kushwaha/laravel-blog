{{-- <h1>Header Page</h1> --}}
{{-- <p>{{$test}}</p> --}}
{{-- @php
    print_r($test);
@endphp --}}

{{-- @foreach ($test as $key=>$data)

<p>{{$key}} => {{$data}}</p>
    
@endforeach --}}


{{-- @forelse ( $test as $key=>$data )
<p>{{$key}} => {{$data}}</p>
@empty
    <h1>No Value Found</h1>
@endforelse --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Website</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="about">About</a></li>
                <li><a href="post">Post</a></li>
            </ul>
        </nav>
    </header>