@extends('layouts.app')
@section('content')
    <div class='container'>
        <a href="{{ route('siswas.create') }}" class="btn btn-toolbar">Tambah Siswa</a>
        <button class="btn btn-outline-success" type='button' data-bs-toggle='modal' data-bs-target='#modalSiswa'>Tambah
            Siswa</button>
        <div class="card">
            <div class="container">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <td>No.</td>
                            <td>NIS</td>
                            <td>Nama</td>
                            <td>Tanggal Lahir</td>
                            <td>Aksi</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($siswa as $siswas)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $siswas->nis }}</td>
                                <td>{{ $siswas->nama }}</td>
                                <td>{{ $siswas->tanggal_lahir }}</td>
                                <td>
                                    <ul class="nav">
                                        <a href="{{ route('siswa.show', $siswas->nis) }}"
                                            class="btn btn-success mr-2">Detail</a>
                                        <a href="{{ route('siswa.edit', $siswas->id) }}" class="btn btn-primary">Edit</a>
                                        <form action="{{ route('siswa.destroy', $siswas->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Hapus</button>
                                        </form>
                                    </ul>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="modal" tabindex="-1" id="modalSiswa">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Data Siswa</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label='Close' />
                </div>
                
                    <form action="{{ route('siswa.store') }}" method="post">
                        @csrf
                        <div class="modal-body">
                        <ul class="list-group">
                            Nama <input type="text" name="nama" required>
                            Nis <input type="text" name="nis" required>
                            Tanggal Lahir <input type="date" name="tanggal_lahir" required>
                        </ul>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                            <input type="submit" value="Simpan" class="btn btn-success">
                        </div>
                    </form>
            </div>
        </div>
    </div>
@endsection
