@extends('../layouts.app')
@section('content')
    <div class='container'>
        <a href="{{ route('user.create') }}" class="btn btn-toolbar">Tambah User</a>
        <div class="card">
            <div class="card-header">
                <h3>Manajemen User</h3>
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <td>No.</td>
                            <td>Nama</td>
                            <td>Jabatan</td>
                            <td>Email</td>
                            <td>Aksi</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($datauser as $user)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->role}}</td>
                                <td>{{$user->email}}</td>
                                <td>
                                    <ul class="nav">
                                        <a href="{{ route('user.edit', $user->id) }}" class="btn btn-primary">Edit</a>
                                        <form action="{{ route('user.destroy', $user->id) }}" method="POST">
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