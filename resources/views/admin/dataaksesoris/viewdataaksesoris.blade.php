@extends('admin.layouts.main')

@section('content')
<div class="card">
    <div class="card-body">
        <h1>Data Aksesoris</h1>
        <h4><a href="/admin/viewtambahdataaksesoris" class="btn btn-primary">Tambah Data Aksesoris</a></h4>
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>Gambar Aksesoris</th>
                    <th>Nama Aksesoris</th>
                    <th>Kategori</th>
                    <th>Brand</th>
                    <th>Kompatibilitas</th>
                    <th>Deskripsi</th>
                    <th>Harga</th>
                    <th>Stok</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>Gambar Aksesoris</th>
                    <th>Nama Aksesoris</th>
                    <th>Kategori</th>
                    <th>Brand</th>
                    <th>Kompatibilitas</th>
                    <th>Deskripsi</th>
                    <th>Harga</th>
                    <th>Stok</th>
                    <th>Aksi</th>
                </tr>
            </tfoot>
            <tbody>
                @foreach ($aksesoris as $data)
                <tr>
                    <td><img src="{{ asset($data->gambar) }}" width="150px" height="150px"></td>
                    <td>{{ $data->nama_aksesoris }}</td>
                    <td>{{ $data->category }}</td>
                    <td>{{ $data->brand }}</td>
                    <td>{{ $data->compatibility }}</td>
                    <td>{{ $data->deskripsi }}</td>
                    <td><p>Rp. </p>{{ $data->harga }}</td>
                    <td>{{ $data->stok }}</td>
                    <td>
                        <a href="/admin/viewubahdataaksesoris/{{ $data->id_aksesoris }}" class="btn btn-primary"><img src="{{ asset('img/edit.png') }}" alt="" width="60px" height="60px"></a>
                    </td>
                    <td>
                        <form action="/admin/hapusdataaksesoris/{{ $data->id_aksesoris }}" class="d-inline" method="POST">
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