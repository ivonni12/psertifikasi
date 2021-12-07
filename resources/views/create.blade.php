@extends('layouts.default')

@section('content')
    <section>
        <div class="container mt-5">
            <h1>Tambah Mahasiswa</h1>
            <div class="row">
                <div class="col-lg-8">
                    <form action="{{url('/store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="nama">Nama Mahasiswa </label>
                            <input type="text" name="nama" class="form-control" placeholder="Nama">
                        </div>
                        <div class="form-group">
                            <label for="nama">NIM </label>
                            <input type="number" name="nim" class="form-control" placeholder="nim">
                        </div>
                        <div class="form-group">
                            <label for="nama">Alamat </label>
                            <textarea name="alamat" class="form-control" placeholder="Yogyakarta"></textarea>
                        </div>

                        <div class="form-group mt-2">
                        <button type="submit" class="btn btn-primary">Tambah Mahasiswa</button>
                        </div>

                        <div class="form-group mt-2">
                            <a href="{{url("/")}}">
                                << Kembali ke halaman utama</a>
                        </div>
                    </div>
                </div>    
            </div>
        </div>
    </section>
@endsection