@extends('admin.layouts.main')

@section('content')
    <div class="card">
        <div class="card-body">
            <h1>Data Game</h1>
            <h4><a href="/admin/viewtambahdatagame" class="btn btn-primary">Tambah Data Game</a></h4>
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>Gambar Konsol</th>
                        <th>Nama Konsol</th>
                        <th>Pengembang</th>
                        <th>Tanggal Rilis</th>
                        <th>Harga</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Gambar Konsol</th>
                        <th>Nama Konsol</th>
                        <th>Pengembang</th>
                        <th>Tanggal Rilis</th>
                        <th>Harga</th>
                        <th>Aksi</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($konsol as $data)
                    <tr>
                        <td><img src="{{ asset($data->gambar) }}" width="150px" height="150px"></td>
                        <td>{{ $data->nama_konsol }}</td>
                        <td>{{ $data->pengembang }}</td>
                        <td>{{ $data->tgl_rilis }}</td>
                        <td><p>Rp. </p>{{ $data->harga }}</td>
                        <td>
                            <a href="/admin/viewubahdatakonsol/{{ $data->id_konsol }}" class="btn btn-primary"><img src="{{ asset('img/edit.png') }}" alt="" width="60px" height="60px"></a>
                        </td>
                        <td>
                            <form action="/admin/hapusdatakonsol/{{ $data->id_konsol }}" class="d-inline" method="POST">
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