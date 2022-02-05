@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3>Edit Data Siswa</h3>
            </div>
            <div class="card-body">
                <a href="{{ route('siswa.index') }}" class="btn btn-primary">< Kembali</a>
                <form action="{{ route('siswa.update', $siswa->id) }}" method="post">
                @csrf
                @method('put')
                <ul class="list-group">
                    Nama <input type="text" name="nama" required value="{{ $siswa->nama }}">
                    Nis <input type="text" name="nis" required value="{{ $siswa->nis }}">
                    Tanggal Lahir <input type="date" name="tanggal_lahir" required value="{{ $siswa->tanggal_lahir }}">
                </ul>
                <input type="submit" value="Ubah Data" class="btn btn-success">
            </form>
            </div>
        </div>
        </div>    
@endsection