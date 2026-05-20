<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Sistem Informasi Akademik')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body { background-color: #f8f9fa; }
        .navbar-brand { font-weight: bold; letter-spacing: 1px; }
        .card { border: none; box-shadow: 0 2px 8px rgba(0,0,0,0.08); }
        footer { font-size: 0.9rem; color: #6c757d; }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <a class="navbar-brand" href="/">
            <i class="bi bi-mortarboard-fill me-2"></i>Akademik PNP
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link @yield('navHome')" href="/"><i class="bi bi-house me-1"></i>Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @yield('navMhs')" href="{{ route('mahasiswa.index') }}">
                        <i class="bi bi-people me-1"></i>Mahasiswa
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @yield('navDosen')" href="{{ route('dosen.index') }}">
                        <i class="bi bi-person-badge me-1"></i>Dosen
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @yield('navprodi')" href="/prodi">
                        <i class="bi bi-building me-1"></i>Prodi
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<<div class="container mt-4 mb-5">
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <i class="bi bi-check-circle me-2"></i>{{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif
    @if($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @yield('content')
</div>

<footer class="text-center py-3 bg-white border-top">
    <p class="mb-0">Copyright &copy; 2026 <strong>Politeknik Negeri Padang</strong></p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>