<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> @yield('title', 'Laravel') </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    @yield('content')
    <ul>
        <li><a href="/">Home Page</a></li>
        <li> <a href="/contact">Contact</a></li>
        <li><a href="/about">About Us</a></li>
    </ul>
</body>
</html>