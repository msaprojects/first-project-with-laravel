@extends('../layouts.app')
@section('content')
    <div class='container'>
        <a href="{{ route('siswa.create') }}" class="btn btn-toolbar">Tambah Siswa</a>
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
@endsection
