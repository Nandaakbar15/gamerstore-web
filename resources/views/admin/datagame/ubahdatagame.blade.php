@extends('admin.layouts.main')

@section('content')
    <div class="card">
        <div class="card-body">
            <h1>Form halaman ubah data game</h1>
            <input type="hidden" name="gambarLama" value="{{ $game->gambar }}">
            <form action="/admin/ubahdatagame/{{ $game->id_game }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="nama_game" class="form-label">Nama Game</label>
                    <input type="text" name="nama_game" class="form-control @error('nama_game') is-invalid @enderror" id="nama_game" autofocus value="{{ old("nama_game", $game->nama_game) }}">

                    @error('nama_game')
                        <div class="is-invalid">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="tgl_rilis" class="form-label">Tanggal Rilis</label>
                    <input type="date" name="tgl_rilis" class="form-control @error('tgl_rilis') is-invalid @enderror" id="tgl_rilis" autofocus value="{{ old("tgl_rilis", $game->tgl_rilis) }}">

                    @error('tgl_rilis')
                        <div class="is-invalid">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="publisher" class="form-label">Publisher</label>
                    <input type="text" name="publisher" class="form-control @error('publisher') is-invalid @enderror" id="publisher" autofocus value="{{ old("publisher", $game->publisher) }}">

                    @error('publisher')
                        <div class="is-invalid">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="deskripsi" class="form-label">Deskripsi</label>
                    <input type="text" name="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror" id="deskripsi" autofocus value="{{ old("deskripsi", $game->deskripsi) }}">

                    @error('deskripsi')
                        <div class="is-invalid">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="platform" class="form-label">Platform</label>
                    <input type="text" name="platform" class="form-control @error('platform') is-invalid @enderror" id="platform" autofocus value="{{ old("platform", $game->platform) }}">

                    @error('platform')
                        <div class="is-invalid">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="harga" class="form-label">Harga Game</label>
                    <input type="number" name="harga" class="form-control @error('harga') is-invalid @enderror" id="harga" autofocus value="{{ old("harga", $game->harga) }}">

                    @error('harga')
                        <div class="is-invalid">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    @if ($game->gambar)
                            <img src="{{ asset($game->gambar) }}" alt="" width="300px" height="200px">
                        @else
                            <img class="img-preview img-fluid mb-3 col-sm-5">
                        @endif
                        <div class="img-preview">
                            <label for="foto">Gambar game</label>
                            <input type="file" class="form-control @error('gambar') is-invalid @enderror" id="gambar" placeholder="Gambar game" name="gambar" onchange="previewImage()">
                            @error('gambar')
                                <div class="is-invalid">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
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