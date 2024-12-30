@extends('admin.layouts.main')

@section('content')
    <div class="card">
        <div class="card-body">
            <h1>Form halaman tambah konsol</h1>
            <form action="/admin/tambahkonsol" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="nama_konsol" class="form-label">Nama Konsol</label>
                    <input type="text" name="nama_konsol" class="form-control @error('nama_konsol') is-invalid @enderror" id="nama_konsol" required="{{ old("nama_konsol") }}">

                    @error('nama_konsol')
                        <div class="is-invalid">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="pengembang" class="form-label">Pengembang</label>
                    <input type="text" name="pengembang" class="form-control @error('pengembang') is-invalid @enderror" id="pengembang" required="{{ old("pengembang") }}">

                    @error('pengembang')
                        <div class="is-invalid">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="tgl_rilis" class="form-label">Tanggal Rilis</label>
                    <input type="date" name="tgl_rilis" class="form-control @error('tgl_rilis') is-invalid @enderror" id="tgl_rilis" required="{{ old("tgl_rilis") }}">

                    @error('tgl_rilis')
                        <div class="is-invalid">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="harga" class="form-label">Harga Konsol</label>
                    <input type="number" name="harga" class="form-control @error('harga') is-invalid @enderror" id="harga" required="{{ old("harga") }}">

                    @error('harga')
                        <div class="is-invalid">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="gambar" class="form-label">Gambar</label>
                    <input type="file" name="gambar" class="form-control @error('gambar') is-invalid @enderror" id="gambar" required="{{ old("gambar") }}">

                    @error('gambar')
                        <div class="is-invalid">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection