@extends('admin.layouts.main')

@section('content')
    <div class="card">
        <div class="card-body">
            <h1>Data User</h1>
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>Username User</th>
                        <th>Email User</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Username User</th>
                        <th>Email User</th>
                        <th>Aksi</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($user as $data)
                    <tr>
                        <td>{{ $data->username}}</td>
                        <td>{{ $data->email }}</td>
                        <td>
                            <form action="/admin/hapusdatauser/{{ $data->id }}" class="d-inline" method="POST">
                                @method('delete')
                                @csrf
                                <button class="badge border-0" onclick="return confirm('Yakin mau hapus data ini?')"><img src="{{ asset('img/delete.png') }}" alt="" width="60px" height="60px"></button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection