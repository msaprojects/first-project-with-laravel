@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3>Edit Data User</h3>
            </div>
            <div class="card-body">
                <a href="{{ route('user.index') }}" class="btn btn-primary">< Kembali</a>
                <form action="{{ route('user.update', $user->id) }}" method="post">
                @csrf
                @method('put')
                <ul class="list-group">
                    Nama <input type="text" name="name" required value="{{ $user->name }}">
                    Jabatan <select name="role" class="form-control">
                        <option value="admin">Admin</option>
                        <option value="siswa">Siswa</option>
                    </select>
                    Email <input type="text" name="email" required value="{{ $user->email }}">
                </ul>
                <input type="submit" value="Ubah Data" class="btn btn-success">
            </form>
            </div>
        </div>
        </div>    
@endsection