@extends('utama')

@section('judul_halaman','Halaman Kontak')

@section('isi')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak Perpustakaan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 20px;
        }

        h1 {
            margin: 0;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }

        h2 {
            color: #333;
        }

        p {
            margin: 0;
            line-height: 1.6;
        }

        .contact-form {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
        }

        label {
            display: block;
            font-weight: bold;
        }

        input[type="text"],
        input[type="email"],
        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        input[type="submit"] {
            background-color: #333;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #555;
        }
    </style>
</head>
<body>
    <header>
        <h1>Kontak Perpustakaan</h1>
    </header>
    <div class="container">
        <h2>Hubungi Kami</h2>
        <p>Silakan hubungi kami jika Anda memiliki pertanyaan atau permintaan lebih lanjut tentang perpustakaan kami.</p>
        <div class="contact-form">
            <<form action="{{ route('kontak.submit') }}" method="post" enctype="multipart/form-data">
                @csrf
                <label for="nama">Nama:</label>
                <input type="text" id="nama" name="nama" class="form-control @error('nama') is-invalid @enderror" value="{{ old('nama') }}">
                @error('nama')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" >
                @error('email')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <label for="pesan">Pesan:</label>
                <textarea id="pesan" name="pesan" class="form-control @error('pesan') is-invalid @enderror" rows="4" >{{ old('pesan') }}</textarea>
                @error('pesan')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

            
                

                <input type="submit" value="Kirim Pesan">
            </form>
        </div>
    </div>
</body>
</html>

@endsection





