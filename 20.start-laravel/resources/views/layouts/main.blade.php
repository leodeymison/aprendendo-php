<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="shortcut icon" href="/images/logo.png" type="image/x-icon">

    {{-- Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    {{-- Google font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">

    {{-- Style --}}
    <link rel="stylesheet" href="/css/style.css">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="/">
                    <img src="/images/logo.png" alt="Logo" width="50" height="50"
                        class="d-inline-block align-text-top">
                </a>

                <!-- Botão de colapso para dispositivos pequenos -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Menus no lado direito -->
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link text-white active" href="/">HOME</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="/events">EVENTOS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="/event-create">CRIAR EVENTO</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">ENTRAR</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">CADASTRAR</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main>
        <div class="container-fluid">
            <div class="row">
                @if (session('msg'))
                    <div class="box-msg" id="box-msg">
                        <p class="msg {{ session('type') }}">{{ session('msg') }}</p>
                    </div>
                @endif
                @yield('content')
            </div>
        </div>
    </main>

    <footer>
        <div class="d-flex justify-content-center bg-dark text-white py-5">
            <p>ALCAN EVENTS &copy; 2024</p>
        </div>
    </footer>

    {{-- Icons --}}
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script>
        setTimeout(function() {
            document.getElementById('box-msg').style.display = 'none';
        }, 3000);
    </script>
</body>

</html>
