
  <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
    <div class="container-fluid">
      <div class="header-body">
          
        <!-- Card stats -->
        <div class="row">
          <div class="col-xl-4 col-lg-6">
            <div class="card card-stats mb-2 mb-xl-4 ">
              <div class="card-body">
                <div class="row">
                  <div class="col ">
                    <h5 class="card-title text-uppercase text-muted mt-0">Mahasiswa</h5>
                    <span class="h2 font-weight-bold mb-0">{{ $mhs }}</span>
                  </div>
                  <div class="col-auto">
                    <div class="icon icon-shape bg-primary text-white rounded-circle shadow mt-2">
                      <i class="fas fa-users"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-lg-6">
            <div class="card card-stats mb-2 mb-xl-4">
              <div class="card-body">
                <div class="row">
                  <div class="col">
                    <h5 class="card-title text-uppercase text-muted mt-0">Yang Dievaluasi</h5>
                    <span class="h2 font-weight-bold  mb-0">{{ $mhseval }}</span>
                  </div>
                  <div class="col-auto">
                    <div class="icon icon-shape bg-danger text-white rounded-circle shadow mt-2">
                      <i class="fas fa-user"></i>
                    </div>
                  </div>
                </div>
                
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-lg-6">
            <div class="card card-stats mb-2 mb-xl-4">
              <div class="card-body">
                <div class="row">
                  <div class="col">
                    <h5 class="card-title text-uppercase text-muted mt-0">Tidak dievaluasi </h5>
                    <span class="h2 font-weight-bold mb-2">{{ $mhsno }}</span>
                  </div>
                  <div class="col-auto">
                    <div class="icon icon-shape bg-info text-white rounded-circle shadow mt-2">
                      <i class="fas fa-user-check"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  {{-- @endforeach --}}
