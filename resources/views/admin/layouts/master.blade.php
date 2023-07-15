<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
</head>

<body>
    <header id="header">
        <nav>
            <button type="button" id="btn-user" onclick="toggleMenu()">
                Username
            </button>
            <ul class="" id="user-dropdown" >
                <li>Login</li>
                <li>Register</li>
            </ul>
        </nav>
    </header>



    <script src="{{asset('js/custom.js')}}"></script>
</body>

</html>
