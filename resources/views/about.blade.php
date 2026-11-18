@extends('layout')

@section('title', 'Tentang Kami')

@section('content')
    <div class="page-header">
        <h2>Tentang Sekolah Jaya</h2>
        <p class="page-subtitle">Mengenal lebih dekat visi, misi, dan komitmen pendidikan kami</p>
    </div>

    <div class="about-card">
        <div class="about-banner">
            <div class="banner-badge">Profil Lembaga</div>
            <h3>Mencetak Generasi Unggul, Cerdas, dan Berkarakter</h3>
        </div>
        <div class="about-body">
            <p>
                Sekolah ini merupakan lembaga pendidikan yang berkomitmen untuk mencetak generasi yang unggul, berkarakter, dan siap menghadapi tantangan masa depan. Dengan mengintegrasikan ilmu pengetahuan, teknologi, dan nilai-nilai moral, sekolah ini menyediakan lingkungan belajar yang kondusif, kreatif, dan inovatif. Didukung oleh tenaga pendidik yang profesional serta fasilitas yang memadai, sekolah ini berupaya mengembangkan potensi siswa secara maksimal baik di bidang akademik maupun non-akademik.
            </p>
        </div>
    </div>

    <div class="grid-2-col">
        <div class="info-card">
            <div class="card-title-icon">🎯</div>
            <h4>Visi Sekolah</h4>
            <p>
                Menjadi pusat pendidikan kejuruan teknologi yang berstandar internasional, menghasilkan lulusan yang kompeten, berakhlak mulia, dan siap bersaing di era transformasi digital.
            </p>
        </div>

        <div class="info-card">
            <div class="card-title-icon">📌</div>
            <h4>Misi Sekolah</h4>
            <ul class="styled-list">
                <li>Menyelenggarakan kurikulum berbasis kompetensi industri dan teknologi terkini.</li>
                <li>Menumbuhkan karakter disiplin, integritas, dan semangat kolaborasi.</li>
                <li>Menyediakan fasilitas laboratorium dan sarana praktikum berstandar modern.</li>
                <li>Membangun kemitraan strategis dengan dunia usaha dan industri (DUDI).</li>
            </ul>
        </div>
    </div>
@endsection
