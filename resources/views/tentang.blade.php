@extends('utama')

@section('judul_halaman','Tentang')

@section('isi')
<div>
<img src="{{asset('img/perpustakaan.jpg')}}" alt="perpustakaan" width="100%" height="300px">
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ISI PERPUSTAKAAN</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 20px;
            text-align: center;
        }

        h1 {
            font-size: 36px;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        ul {
            list-style-type: disc;
            margin-left: 20px;
        }

        li {
            font-size: 18px;
            line-height: 1.6;
            margin: 10px 0;
        }
    </style>
</head>
<body>
    <header>
        <h1><b>Tentang Perpustakaan</b></h1>
    </header>
    <div class="container">
        <h2><b>Koleksi Buku</b></h2>
        <p>Perpustakaan kami memiliki beragam koleksi buku yang mencakup berbagai genre dan topik. Beberapa jenis buku yang dapat Anda temukan di perpustakaan kami meliputi:</p>
        <ul>
            <li>Buku Fiksi</li>
            <li>Buku Non-Fiksi</li>
            <li>Buku Anak-anak</li>
            <li>Majalah dan Jurnal</li>
            <li>Buku Referensi</li>
            <li>Novel Grafis</li>
        </ul>

        <h2><b>Sumber Pengetahuan</b></h2>
        <p>Selain buku, kami juga memiliki berbagai sumber pengetahuan lainnya yang dapat Anda akses, termasuk:</p>
        <ul>
            <li>E-book</li>
            <li>Audio Book</li>
            <li>Buku Audiovisual</li>
            <li>Dokumentasi Digital</li>
        </ul>

        <h2><b>Layanan Perpustakaan</b></h2>
        <p>Kami menyediakan berbagai layanan perpustakaan untuk memenuhi kebutuhan Anda dalam mengakses dan memanfaatkan koleksi kami. Layanan kami mencakup:</p>
        <ul>
            <li>Peminjaman Buku</li>
            <li>Konsultasi Penelitian</li>
            <li>Program Baca Bersama</li>
            <li>Workshop Literasi</li>
        </ul>
    
    </div>
</body>
</html>

@endsection