<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/custom-frontend.css') }}">
    <script src="{{ asset('js/custom-frontend.js') }}" defer></script>
</head>

<body>
    <header id="header">
        <nav>
            <div class="dropdown" data-dropdown>
                <button type="button" data-dropdown-button>
                    Username
                </button>
                <div class="dropdown-menu">
                    <ul>
                        @yield('userbar')
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <div>
        @yield('content')
    </div>
    <footer>
    </footer>
</body>

</html>
