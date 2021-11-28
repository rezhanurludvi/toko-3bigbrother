@extends('Dashboard.Layouts.index')
@section('container')
<div class="container py-4">
    <div class="row justify-content-center">
      <div class="col-12">
        <div class="card mb-4">
          <div class="card-header pb-0 mb-4 col-lg-8">
            <h6>Tambah Data Karyawan</h6>
          </div>

          <div class="container">
              <div class="row justify-content-center">
                  <div class="col-md-6">
                      <form action="/insert-data" method="POST" enctype="multipart/form-data">
                          @csrf
                          {{-- <div class="mb-3">
                              <div class="form-floating mb-3">
                                  <input type="text" class="form-control" name="code_karyawan" id="code_karyawan" placeholder="PGW">
                                  <label for="">ID Karyawan</label>
                                </div>
                          </div> --}}

                          <div class="mb-3">
                              <div class="form-floating">
                                  <input type="name" class="form-control" name="nama" id="nama" placeholder="Nama">
                                  <label for="nama">Nama</label>
                                </div>
                          </div>

                          <div class="mb-3">
                              <div class="form-floating">
                                  <select class="form-select pt-0" id="jeniskelamin" name="jeniskelamin" aria-placeholder="jenis kelamin">
                                    <option selected>Pilih Jenis Kelamin</option>
                                    <option value="1">laki</option>
                                    <option value="2">perempuan</option>
                                  </select>
                                </div>
                          </div>

                          <div class="mb-3">
                              <div class="form-floating">
                                  <input type="number" class="form-control" id="notelp" name="notelp" placeholder="Nomor telepon">
                                  <label for="floatingPassword">Nomor telepon</label>
                                </div>
                          </div>

                          <div class="mb-3">
                              <div class="form-floating">
                                  <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat">
                                  <label for="floatingPassword">Alamat</label>
                                </div>
                          </div>
                          <a href="/data-karyawan" class="btn btn-danger"> Kembali </a>
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