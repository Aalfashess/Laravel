@extends('layout')

@section('title', 'Hubungi Kami')

@section('content')
    <div class="page-header">
        <h2>Hubungi Kami</h2>
        <p class="page-subtitle">Silakan hubungi kami untuk informasi pendaftaran, akademik, dan kemitraan</p>
    </div>

    <div class="contact-grid">
        <div class="contact-card">
            <div class="contact-icon">📧</div>
            <h4>Email Resmi</h4>
            <p>Untuk pertanyaan umum dan administrasi:</p>
            <a href="mailto:SMKtelekomunikasitelesandibekasi@gmail.com" class="contact-link">
                SMKtelekomunikasitelesandibekasi@gmail.com
            </a>
        </div>

        <div class="contact-card">
            <div class="contact-icon">📸</div>
            <h4>Instagram</h4>
            <p>Ikuti informasi kegiatan dan dokumentasi:</p>
            <a href="https://instagram.com/officialtels" target="_blank" rel="noopener noreferrer" class="contact-link">
                @officialtels
            </a>
        </div>

        <div class="contact-card">
            <div class="contact-icon">📞</div>
            <h4>Nomor Telepon / WhatsApp</h4>
            <p>Layanan konsultasi dan respon cepat:</p>
            <a href="tel:08123456789" class="contact-link">
                08123456789
            </a>
        </div>
    </div>

    <div class="info-card mt-4">
        <h4>Jam Pelayanan Administrasi</h4>
        <p class="mb-0">
            Senin - Jumat: 07.30 - 16.00 WIB &nbsp;|&nbsp; Sabtu: 08.00 - 12.00 WIB &nbsp;|&nbsp; Minggu & Hari Libur Nasional: Tutup
        </p>
    </div>
@endsection
