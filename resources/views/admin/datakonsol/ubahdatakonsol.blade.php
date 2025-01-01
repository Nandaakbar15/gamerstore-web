@extends('admin.layouts.main')

@section('content')
    <div class="card">
        <div class="card-body">
            <h1>Form halaman ubah data konsol</h1>
            <input type="hidden" name="gambarLama" value="{{ $konsol->gambar }}">
            <form action="/admin/ubahdatakonsol/{{ $konsol->id_konsol }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="nama_game" class="form-label">Nama Konsol</label>
                    <input type="text" name="nama_game" class="form-control @error('nama_konsol') is-invalid @enderror" id="nama_konsol" autofocus value="{{ old("nama_konsol", $konsol->nama_konsol) }}">

                    @error('nama_konsol')
                        <div class="is-invalid">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="tgl_rilis" class="form-label">Tanggal Rilis</label>
                    <input type="date" name="tgl_rilis" class="form-control @error('tgl_rilis') is-invalid @enderror" id="tgl_rilis" autofocus value="{{ old("tgl_rilis", $konsol->tgl_rilis) }}">

                    @error('tgl_rilis')
                        <div class="is-invalid">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="harga" class="form-label">Harga Konsol</label>
                    <input type="number" name="harga" class="form-control @error('harga') is-invalid @enderror" id="harga" autofocus value="{{ old("harga", $konsol->harga) }}">

                    @error('harga')
                        <div class="is-invalid">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    @if ($konsol->gambar)
                            <img src="{{ asset($konsol->gambar) }}" alt="" width="300px" height="200px">
                        @else
                            <img class="img-preview img-fluid mb-3 col-sm-5">
                        @endif
                        <div class="img-preview">
                            <label for="foto">Gambar konsol</label>
                            <input type="file" class="form-control @error('gambar') is-invalid @enderror" id="gambar" placeholder="Gambar game" name="gambar" onchange="previewImage()">
                            @error('gambar')
                                <div class="is-invalid">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                </div>
                <button type="submit" class="btn btn-primary">Ubah!</button>
            </form>
        </div>
    </div>
    <script text="text/javascript">
        function previewImage() {
            const gambar = document.querySelector('#gambar');
            const imgPreview = document.querySelector('.img-preview');

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(gambar.files[0]);

            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        }
    </script>
@endsection