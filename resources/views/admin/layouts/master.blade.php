<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/custom-admin.css') }}">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Sharp:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <script src="{{ asset('js/custom-admin.js') }}" defer></script>
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
    <section id="container">
        {{-- sidebar section --}}
        <aside>
            <div class="toggle">
                <div class="logo">
                    <img src="{{ asset('images/logo-saitama.jpg') }}" alt="logo" width="100px">
                    <h2>Admin</h2>
                </div>
                <div class="close">
                    <span class="material-symbols-sharp" id="close-btn">
                        close
                    </span>
                </div>
            </div>

            <div class="sidebar">
                <a href="#">
                    <span class="material-symbols-sharp">
                        dashboard
                    </span>
                    <h3>Dashboard</h3>
                </a>
                <a href="{{route(admin.users)}}">
                    <span class="material-symbols-sharp">
                        person
                    </span>
                    <h3>Users</h3>
                </a>
                <a href="#">
                    <span class="material-symbols-sharp">
                        history
                    </span>
                    <h3>History</h3>
                </a>
                <a href="#" class="active-menu">
                    <span class="material-symbols-sharp">
                        monitoring
                    </span>
                    <h3>Analytics</h3>
                </a>
                <a href="#">
                    <span class="material-symbols-sharp">
                        list_alt
                    </span>
                    <h3>Orders</h3>
                </a>
                <a href="#" >
                    <span class="material-symbols-sharp">
                        restaurant_menu
                    </span>
                    <h3>Foods</h3>
                </a>
                <a href="#">
                    <span class="material-symbols-sharp">
                        storefront
                    </span>
                    <h3>Restaurants</h3>
                </a>
                <a href="#">
                    <span class="material-symbols-sharp">
                        report
                    </span>
                    <h3>Reports</h3>
                </a>
                <a href="#">
                    <span class="material-symbols-sharp">
                        settings
                    </span>
                    <h3>Settings</h3>
                </a>
            </div>
        </aside>
        {{-- end of sidebar section --}}
        <div id="content">
            @yield('content')
        </div>
    </section>
    <footer>
    </footer>
</body>

</html>
