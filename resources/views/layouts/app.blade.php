<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Wulan PLN ')</title>
    <!-- Tambahkan link CSS -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container text-center">
                <a class="navbar-brand mx-auto" href="{{ url('/') }}">Perusahaan Listrik Negara Wulan Azmi Pohan</a>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">

                        <li class="nav-item">
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-primary"
                                    style="background-color: #007bff; border-radius: 8px; border: none; padding: 10px 20px; font-size: 16px;">
                                    Logout
                                </button>
                            </form>

                        </li>
                    </ul>
                </div>
            </div>
        </nav>

    </header>
    

    <main class="container mt-4">
        @yield('content')
    </main>

    <footer class="text-center mt-4">
        <p> CopyRight &copy; {{ date('Y') }} Wulan Azmi Pohan </p>
    </footer>

    <!-- Tambahkan script JS -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>