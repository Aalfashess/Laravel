@extends('layout')

@section('title', 'Beranda')

@section('content')
    <div class="hero-section">
        <div class="hero-badge">Selamat Datang di Portal Resmi</div>
        <h2 class="hero-title">Pusat Pendidikan & Kejuruan Teknologi</h2>
        <p class="hero-desc">
            Sekolah ini adalah institusi pendidikan yang berfokus pada pengembangan keterampilan di bidang teknologi informasi dan komunikasi. Program keahlian seperti Rekayasa Perangkat Lunak (RPL) dan Teknik Komputer dan Jaringan (TKJ) dirancang untuk membekali siswa dengan kemampuan praktis seperti pemrograman, pengelolaan jaringan, serta pengembangan aplikasi berbasis web dan mobile.
        </p>
        <p class="hero-subtext">
            Dengan pendekatan pembelajaran berbasis proyek (<em>project-based learning</em>), siswa didorong untuk aktif, kreatif, dan siap terjun ke dunia industri maupun melanjutkan pendidikan ke jenjang yang lebih tinggi.
        </p>
        <div class="hero-actions">
            <a href="/siswa" class="btn btn-primary">Lihat Data Siswa &rarr;</a>
            <a href="/about" class="btn btn-secondary">Tentang Sekolah</a>
        </div>
    </div>

    <div class="section-title">
        <h3>Program Keahlian Unggulan</h3>
        <p>Mempersiapkan siswa dengan kompetensi teknologi masa depan</p>
    </div>

    <div class="feature-grid">
        <div class="feature-card">
            <div class="feature-icon">💻</div>
            <h4>Rekayasa Perangkat Lunak (RPL)</h4>
            <p>Mempelajari rekayasa software, pembuatan website, aplikasi mobile, algoritma pemrograman, dan manajemen basis data modern.</p>
        </div>

        <div class="feature-card">
            <div class="feature-icon">🌐</div>
            <h4>Teknik Komputer & Jaringan (TKJ)</h4>
            <p>Fokus pada infrastruktur jaringan komputer, administrasi server, keamanan siber (cybersecurity), serta konfigurasi perangkat keras.</p>
        </div>

        <div class="feature-card">
            <div class="feature-icon">🚀</div>
            <h4>Project-Based Learning</h4>
            <p>Membiasakan siswa menyelesaikan studi kasus riil industri untuk mengasah soft skill kolaborasi, problem solving, dan inovasi.</p>
        </div>
    </div>
@endsection
