@extends('admin.layouts.main')

@section('content')
    <div class="card">
        <div class="card-body">
            <h1>Form halaman tambah aksesoris</h1>
            <form action="/admin/tambahaksesoris" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="nama_aksesoris" class="form-label">Nama Aksesoris</label>
                    <input type="text" name="nama_aksesoris" class="form-control @error('nama_aksesoris') is-invalid @enderror" id="nama_aksesoris" required="{{ old("nama_aksesoris") }}">

                    @error('nama_aksesoris')
                        <div class="is-invalid">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="category" class="form-label">Category</label>
                    <select name="category" id="category" class="form-control @error('category') is-invalid @enderror">
                        <option value="Controller">Controller</option>
                        <option value="Memory Card">Memory Card</option>
                        <option value="Cable">Cable</option>
                        <option value="Headset">Headset</option>
                    </select>

                    @error('category')
                        <div class="is-invalid">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="brand" class="form-label">Brand</label>
                    <input type="text" name="brand" class="form-control @error('brand') is-invalid @enderror" id="brand" required="{{ old("brand") }}">

                    @error('brand')
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
                    <label for="harga" class="form-label">Harga Game</label>
                    <input type="number" name="harga" class="form-control @error('harga') is-invalid @enderror" id="harga" required="{{ old("harga") }}">

                    @error('harga')
                        <div class="is-invalid">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="stok" class="form-label">Stok</label>
                    <input type="text" name="stok" class="form-control @error('stok') is-invalid @enderror" id="stok" required="{{ old("stok") }}">

                    @error('gambar')
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
                <button type="submit" class="btn btn-primary">Tambah!</button>
                <a href="/admin/dataaksesoris" class="btn btn-primary">Kembali</a>
            </form>
        </div>
    </div>
@endsection