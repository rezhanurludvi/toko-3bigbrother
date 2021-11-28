@extends('Dashboard.Layouts.index')
@section('container')
    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0 mb-4 col-lg-8">
                        <h6>Tambah Barang</h6>
                    </div>

                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-md-6">
                                <form method="POST" action="{{ route('databarang.store') }}"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="cade_barang" class="form-label">Code Barang</label>
                                        <input type="text" class="form-control" id="code_barang" value="<?= $nomer ?>"
                                            disabled>
                                        <input type="hidden" name="code_barang" id="code_barang" value="<?= $nomer ?>">
                                    </div>
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Nama Barang</label>
                                        <input type="text" class="form-control" id="nama_barang" name="nama_barang">
                                    </div>
                                    <div class="mb-3">
                                        <label for="jenis_barang" class="form-label">Jenis Barang</label>
                                        <input type="text" class="form-control" id="jenis_barang" name="jenis_barang">
                                    </div>
                                    <div class="mb-3">
                                        <label for="harga_barang" class="form-label">Harga Barang</label>
                                        <input type="text" class="form-control" id="harga_barang" name="harga_barang">
                                    </div>
                                    <div class="mb-3">
                                        <label for="formFile" class="form-label">Foto Barang</label>
                                        <input class="form-control" type="file" id="image" name="image">
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
@endsection
