@extends('Dashboard.Layouts.index')

@section('container')
    <div class="container-fluid">
        <div class="col-lg-12 mb-md-0 mb-4">
            <div class="row">
                <div class="col-12">
                    <div class="card mb-4">
                        <div class="card-header pb-0">
                            <h6>Data Barang</h6>
                            <a href="/databarang/create" class="btn btn-success"> + Tambah Barang</a>
                        </div>
                        <div class="card-body px-0 pt-0 pb-2">
                            <div class="p-0">
                                <table class="table align-items-center mb-0">
                                    <thead>
                                        <tr class="text-center">
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Code Barang</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Nama User</th>
                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                Nama Barang</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Jenis Barang</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Harga Barang</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Waktu Aploud</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Aksi</th>
                                            {{-- <th class="text-secondary opacity-7"></th> --}}
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $item)

                                            <tr class="text-center">
                                                <td>
                                                    <p class="text-xs text-secondary mb-0">{{ $item->code_barang }}</p>
                                                </td>
                                                <td>
                                                    <p class="text-xs text-secondary mb-0">{{ $item->user_id }}</p>
                                                </td>
                                                <td>
                                                    <p class="text-xs font-weight-bold mb-0">{{ $item->nama_barang }}</p>
                                                </td>
                                                <td class="text-sm">
                                                    <span
                                                        class="badge badge-sm bg-gradient-success">{{ $item->jenis_barang }}</span>
                                                </td>
                                                <td>
                                                    <span class="text-secondary text-xs font-weight-bold">Rp.
                                                        {{ $item->harga_barang }}</span>
                                                </td>
                                                <td><span
                                                        class="text-secondary text-xs font-weight-bold">{{ $item->published_at }}</span>
                                                </td>
                                                <td class="col-md-3">
                                                    <a href="databarang/{{ $item->id }}/edit"
                                                        class="btn btn-warning">Edit</a>
                                                    <form action="/databarang/{{ $item->id }}" method="post"
                                                        class="d-inline">
                                                        @method('delete')
                                                        @csrf
                                                        <button class="btn btn-danger"
                                                            onclick="return confirm('Are You Sure??')">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>

                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
