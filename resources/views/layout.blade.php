<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Beranda') | Sekolah Jaya</title>
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <!-- Main Style -->
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>

    <header class="site-header">
        <div class="header-inner">
            <div class="brand">
                <span class="brand-icon">🎓</span>
                <div class="brand-text">
                    <h1>Sekolah Jaya</h1>
                    <p class="brand-tagline">Membentuk Generasi Unggul & Berteknologi</p>
                </div>
            </div>
            @include('navbar')
        </div>
    </header>

    <main class="main-content">
        <div class="container">
            @yield('content')
        </div>
    </main>

    @include('footer')

</body>
</html>
