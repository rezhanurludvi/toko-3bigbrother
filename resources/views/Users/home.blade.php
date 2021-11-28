@extends('Users.layouts.main')

@section('container')
<div class="row my-4">
  {{-- kategori --}}
  <div class="col-lg-2 col-md-6">
    <div class="card">
        <div class="card-header pb-0">
          <a href=""><h6 class="badge btn-outline-primary bg-info text-wrap" style="width: 7rem;">kategori</h6></a>
        </div>
        <div class="card-body p-1 ps-3">
          <div class="timeline timeline-one-side">
            <div class="timeline-block mb-3">
              <span class="timeline-step">
                <i class="ni ni-fat-add text-success text-gradient"></i>
              </span>
              <div class="timeline-content">
                <h6 class="text-dark text-sm font-weight-bold mb-0">
                 <a href="#">Baju</a> 
                </h6>
              </div>
            </div>
          </div>
        </div>

        <div class="card-body p-1 ps-3">
          <div class="timeline timeline-one-side">
            <div class="timeline-block mb-3">
              <span class="timeline-step">
                <i class="ni ni-fat-add text-success text-gradient"></i>
              </span>
              <div class="timeline-content">
                <h6 class="text-dark text-sm font-weight-bold mb-0">
                 <a href="#">Celana</a>
                </h6>
              </div>
            </div>
          </div>
        </div>

        <div class="card-body p-1 ps-3">
          <div class="timeline timeline-one-side">
            <div class="timeline-block mb-3">
              <span class="timeline-step">
                <i class="ni ni-fat-add text-success text-gradient"></i>
              </span>
              <div class="timeline-content">
                <h6 class="text-dark text-sm font-weight-bold mb-0">
                  <a href="">Jaket</a>
                </h6>
              </div>
            </div>
          </div>
        </div>              
    </div>
  </div>

  {{-- isi produk --}}
  <div class="col-lg-10 col-md-6 mb-md-0 mb-4">
    <div class="card">
      <div class="card-header pb-0">
        <div class="row">
          <div class="col-lg-6 col-7">
            <h6>TOKO</h6>
            <p class="text-sm mb-0">
              <i class="fa fa-check text-info" aria-hidden="true"></i>
              <span class="font-weight-bold ms-1">All</span> Produk
            </p>
          </div>
        </div>
      </div>
      {{-- isi produk konten --}}
      <div class="card-body px-0 pb-2 pe-2">
        <div class="row ms-4">
          <div class="col-md-4">
            <div class="card" style="width: 18rem;">
              <div>
                <img src="{{ asset('Admin/img/contoh1.jpg') }}" class="card-img-top" height="200">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
            </div>
          </div>
      
          <div class="col-md-4">
            <div class="card" style="width: 18rem;">
              <div>
                <img src="{{ asset('Admin/img/contoh2.jpg') }}" class="card-img-top" height="200">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card" style="width: 18rem;">
              <div>
                <img src="{{ asset('Admin/img/contoh1.jpg') }}" class="card-img-top" height="200">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card" style="width: 18rem;">
              <div>
                <img src="{{ asset('Admin/img/contoh2.jpg') }}" class="card-img-top" height="200">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card" style="width: 18rem;">
              <div>
                <img src="{{ asset('Admin/img/contoh1.jpg') }}" class="card-img-top" height="200">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card" style="width: 18rem;">
              <div>
                <img src="{{ asset('Admin/img/contoh2.jpg') }}" class="card-img-top" height="200">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>

</div>

@endsection
