@extends('utama')

@section('judul_halaman', 'Halaman Home')

@section('isi')
<head>
    <style>
        /* Menambahkan latar belakang warna  untuk elemen dengan ID "container" */
        .banner {
            background-image: url(img/perpus.jpg);
            background-size: 100%;
            padding: 12em;
        }
    </style>
</head>
<body>
<div class="banner">
    <h1 class="text-light">Selamat Datang di Perpustakaan</h1>
    <p class="text-light">Silakan cari buku yang Anda inginkan dengan menggunakan tombol di bawah ini:</p>
    <a href="{{ route('tentang') }}" class="btn btn-primary">Cari Buku Sekarang</a>
</div>

    <!-- Tambahkan script JavaScript Bootstrap (Opsional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk8CnZE7WmR2u6l5f5n5xlQkFi6DE/L5CpOMbP5K0" crossorigin="anonymous"></script>
</body>
@endsection
