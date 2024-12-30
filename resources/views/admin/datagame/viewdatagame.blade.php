@extends('admin.layouts.main')

@section('content')
    <div class="card">
        <div class="card-body">
            <h1>Data Game</h1>
            <h4><a href="/admin/viewtambahdatagame" class="btn btn-primary">Tambah Data Game</a></h4>
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>Gambar Game</th>
                        <th>Nama Game</th>
                        <th>Tanggal Rilis</th>
                        <th>Publisher</th>
                        <th>Deskripsi</th>
                        <th>Platform</th>
                        <th>Harga</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Gambar Game</th>
                        <th>Nama Game</th>
                        <th>Tanggal Rilis</th>
                        <th>Publisher</th>
                        <th>Deskripsi</th>
                        <th>Platform</th>
                        <th>Harga</th>
                        <th>Aksi</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($game as $data)
                    <tr>
                        <td><img src="{{ asset($data->gambar) }}" width="150px" height="150px"></td>
                        <td>{{ $data->nama_game }}</td>
                        <td>{{ $data->tgl_rilis }}</td>
                        <td>{{ $data->deskripsi }}</td>
                        <td>{{ $data->platform }}</td>
                        <td><p>Rp. </p>{{ $data->harga }}</td>
                        <td>
                            <a href="/admin/viewubahdatagame/{{ $data->id_game }}" class="btn btn-primary"><img src="{{ asset('img/edit.png') }}" alt="" width="60px" height="60px"></a>
                        </td>
                        <td>
                            <form action="/admin/hapusdatagame/{{ $data->id_game }}" class="d-inline" method="POST">
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