@extends('Dashboard.Layouts.index')
@section('container')
    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0 mb-4 col-lg-8">
                        <h6>Edit Barang</h6>
                    </div>

                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-md-6">
                                <form method="POST" action="/databarang/{{ $data->id }}" enctype="multipart/form-data">
                                    @method('put')
                                    @csrf
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Code Barang</label>
                                        <input type="text" class="form-control" id="code_barang" name="code_barang"
                                            value="{{ $data->code_barang }}" disabled>
                                    </div>
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Nama Barang</label>
                                        <input type="text" class="form-control" id="nama_barang" name="nama_barang"
                                            value="{{ $data->nama_barang }}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="jenis_barang" class="form-label">Jenis Barang</label>
                                        <input type="text" class="form-control" id="jenis_barang" name="jenis_barang"
                                            value="{{ $data->jenis_barang }}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="harga_barang" class="form-label">Harga Barang</label>
                                        <input type="text" class="form-control" id="harga_barang" name="harga_barang"
                                            value="{{ $data->harga_barang }}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="formFile" class="form-label">Foto Barang</label>
                                        <input class="form-control" type="hidden" name="oldImage"
                                            value="{{ $data->image }}">

                                        @if ($data->image)
                                            <img src="{{ asset('storage/' . $data->image) }}"
                                                class="img-preview img-fluid mb-3 col-sm-5 d-block">
                                        @else
                                            <img class="img-preview img-fluid mb-3 col-sm-5">
                                        @endif

                                        <input class="form-control @error('image') is-invalid @enderror" type="file"
                                            id="image" name="image" onchange="previewImage()">
                                    </div>
                                    <a href="/databarang" class="btn btn-danger"> Kembali </a>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function previewImage() {
            const image = document.querySelector('#image');
            const imgPreview = document.querySelector('.img-preview');

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        }
    </script>
@endsection
