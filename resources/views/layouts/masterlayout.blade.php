
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Website  - @yield('title','website')</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
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

    {{-- <aside>
        <nav>
            <li><a href="/">Home</a></li>
            <li><a href="about">About</a></li>
            <li><a href="post">Post</a></li>
        </nav>
    </aside> --}}
    @hasSection('content')
    @yield('content')
    @else
    <h1> No Content Found</h1>
        
    @endif
    {{-- @yield('content','<h2>No Content Found</h2>') --}}
<footer>
    <p>&copy; 2024 Your Website. All rights reserved.</p>
</footer>
</body>
</html>