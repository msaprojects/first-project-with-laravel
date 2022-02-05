@extends('../layouts.app')
@section('content')
    <div class='container'>
        <table class="table table-striped">
            <thead>
                <tr>
                    <td>No.</td>
                    <td>NIS</td>
                    <td>Nama</td>
                    <td>Aksi</td>
                </tr>
            </thead>
            <tbody>
                @foreach ($datasiswa as $siswas)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$siswas->nis}}</td>
                        <td>{{$siswas->name}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection