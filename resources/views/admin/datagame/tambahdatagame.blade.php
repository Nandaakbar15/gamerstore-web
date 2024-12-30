@extends('admin.layouts.main')

@section('content')
    <div class="card">
        <div class="card-body">
            <h1>Form halaman tambah game</h1>
            <form action="/admin/tambahgame" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="nama_game" class="form-label">Nama Game</label>
                    <input type="text" name="nama_game" class="form-control @error('nama_game') is-invalid @enderror" id="nama_game" required="{{ old("nama_game") }}">

                    @error('nama_game')
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
                    <label for="publisher" class="form-label">Publisher</label>
                    <input type="text" name="publisher" class="form-control @error('publisher') is-invalid @enderror" id="publisher" required="{{ old("publisher") }}">

                    @error('publisher')
                        <div class="is-invalid">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="deskripsi" class="form-label">Deskripsi</label>
                    <input type="text" name="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror" id="deskripsi" required="{{ old("deskripsi") }}">

                    @error('deskripsi')
                        <div class="is-invalid">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="platform" class="form-label">Platform</label>
                    <input type="text" name="platform" class="form-control @error('platform') is-invalid @enderror" id="platform" required="{{ old("platform") }}">

                    @error('platform')
                        <div class="is-invalid">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="harga" class="form-label">Harga Game</label>
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