@extends('layouts.app')
@section('content')
    <div class="container d-flex justify-content-center">
        <div class="card w-50">
            <div class="card-header">
                <h3>Profile Siswa</h3>
            </div>
            <div class="card-body">
                @can('isAdmin')
                    <a href="{{ route('siswa.index') }}">< Kembali</a>    
                @endcan
                <div class="row ml-2">
                    <h4 class="col-4">NIS : {{ $siswa->nis }}</h4>
                </div>
                <div class="row ml-2">
                    <h4 class="col-4">Nama : {{ $siswa->nama }}</h4>
                </div>
                <div class="row ml-2">
                    <h4 class="col-4">Tanggal Lahir : {{ $siswa->tanggal_lahir }}</h4>
                </div>
            </div>
        </div>
    </div>
@endsection