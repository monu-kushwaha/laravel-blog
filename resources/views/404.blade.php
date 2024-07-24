<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 Page Not Found</title>
    <style>
        body, html {
            height: 100%;
            margin: 0;
            font-family: Arial, sans-serif;
        }

        .background404  {
            background-image: url('img/hampe-to-hai-no.gif');
            background-size: cover;
            background-position: center;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            color: white;
        }

        .background404 .content {
            background: rgba(0, 0, 0, 0.6);
            padding: 20px;
            border-radius: 10px;
        }

        .background404 h1 {
            font-size: 4em;
            margin: 0;
        }

        .background404 p {
            font-size: 1.5em;
        }

        .background404 .buttons {
            margin-top: 20px;
        }

        .background404 .buttons a {
            text-decoration: none;
            color: white;
            background: #007bff;
            padding: 10px 20px;
            border-radius: 5px;
            margin: 0 10px;
            transition: background 0.3s ease;
        }

        .background404 .buttons a:hover {
            background: #0056b3;
        }
    </style>
</head>
<body>
    <div class="background404">
        <div class="content">
            <h1>404</h1>
            <p>Page Not Found</p>
            <p>We’re sorry, the page you have looked for does not exist in our website! Maybe go to our home page or try to use a search?</p>
            <div class="buttons">
                <a href="/">Home Page</a>
                <a href="/search">Search</a>
            </div>
        </div>
    </div>
</body>
</html>
