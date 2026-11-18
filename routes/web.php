<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/siswa', [SiswaController::class, 'index']);

Route::get('/blog', function () {
    $artikel = [
        [
            'judul' => 'Belajar Laravel',
            'isi' => 'Laravel mudah dipelajari dan memiliki ekosistem yang sangat lengkap untuk pengembangan aplikasi web modern.',
            'tanggal' => '10 Mei 2026',
            'kategori' => 'Framework'
        ],
        [
            'judul' => 'Belajar Blade',
            'isi' => 'Blade membuat tampilan lebih rapi dengan sistem templating yang ekspresif, inheritance layout, dan reusable components.',
            'tanggal' => '12 Mei 2026',
            'kategori' => 'Frontend'
        ],
        [
            'judul' => 'Tips Pemrograman Web untuk Siswa',
            'isi' => 'Konsistensi dalam latihan logika dan memahami fundamental HTML, CSS, serta database adalah kunci sukses menjadi web developer.',
            'tanggal' => '15 Mei 2026',
            'kategori' => 'Edukasi'
        ]
    ];

    return view('blog', compact('artikel'));
});

Route::get('/contact', function () {
    return view('contact');
});
