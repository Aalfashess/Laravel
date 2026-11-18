@extends('layout')

@section('title', 'Blog & Artikel')

@section('content')
    <div class="page-header">
        <h2>Halaman Blog</h2>
        <p class="page-subtitle">Kumpulan artikel, tips belajar, dan wawasan seputar teknologi</p>
    </div>

    <div class="blog-grid">
        @forelse($artikel as $a)
            <article class="blog-card">
                <div class="blog-meta">
                    <span class="badge badge-primary">{{ $a['kategori'] ?? 'Artikel' }}</span>
                    <span class="blog-date">{{ $a['tanggal'] ?? 'Terbaru' }}</span>
                </div>
                <h3 class="blog-title">{{ $a['judul'] }}</h3>
                <p class="blog-excerpt">{{ $a['isi'] }}</p>
            </article>
        @empty
            <div class="empty-state">
                <p>Belum ada artikel yang dipublikasikan saat ini.</p>
            </div>
        @endforelse
    </div>
@endsection
