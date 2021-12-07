@extends('layouts.default')

@section('content')
    <section>
        <div class="container mt-5">
            <h1>Edit Data</h1>
            <div class="row">
                <div class="col-lg-8">
                    <form action="{{url('/update/'. $data->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="nama">Nama Mahasiswa </label>
                            <input type="text" name="nama" class="form-control" placeholder="Nama" value="{{$data->nama}}">
                        </div>
                        <div class="form-group">
                            <label for="nama">NIM </label>
                            <input type="number" name="nim" class="form-control" placeholder="NIM" value="{{$data->nim}}">
                        </div>
                        <div class="form-group">
                            <label for="nama">Alamat </label>
                            <textarea name="alamat" class="form-control" 
                            placeholder="Yogyakarta">{{$data->alamat}}</textarea>
                        </div>

                        <div class="form-group mt-2">
                        <button type="submit" class="btn btn-primary">Simpan</button>
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