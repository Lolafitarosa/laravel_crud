
@extends('utama')

@section('isi')
    <section class="page-section bg-primary" id="peminjaman buku">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-lg-8 text-center">
                    <hr class="divider divider-light" />
                    <h1 class="text-white-75 mb-4"></h1>
                    <hr class="divider divider-light" />

                    @if (session('nama') || session('email') || session('pesan'))
                    <div class="alert alert-primary" role="alert">
                            @if (session('nama'))
                                <p>Nama: {{ session('nama') }}</p>
                            @endif

                            @if (session('email'))
                                <p>Email address: {{ session('email') }}</p>
                            @endif

                            @if (session('pesan'))
                                <p>Message: {{ session('pesan') }}</p>
                            @endif
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>
@endsection
