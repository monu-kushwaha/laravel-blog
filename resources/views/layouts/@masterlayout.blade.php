
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Website  - @yield('title','website')</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <script src="{{asset('js/app.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>
    <script src="script.js"></script>
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
    <main>
    @hasSection('content')
    @yield('content')
    </main>
    @else
    <h1> No Content Found</h1>
        
    @endif
    {{-- @yield('content','<h2>No Content Found</h2>') --}}
<footer>
    <p>&copy; 2024 Your Website. All rights reserved.</p>
</footer>
</body>
</html>