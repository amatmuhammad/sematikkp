<div class="container-fluid mt--7">
  <div class="row">
   
    <div class="col-xl-12 order-xl-1">
      <div class="card bg-secondary shadow">
        <div class="card-header bg-white border-0">
          <div class="row align-items-center">
            <div class="col-12">
              <h3 class="mb-0">Formulir Tambah Data</h3>
            </div>
            
          </div>
        </div>
        <div class="card-body">
          <form action="" method="POST">
            {{ csrf_field() }}
            {{-- <h6 class="heading-md text-muted mb-4">Formulir Tambah data</h6> --}}
            <div class="pl-lg-4">
              <div class="row">
                <div class="col-lg-12">
                  <div class="form-group">
                    <label class="form-control-label" for="input-username">Nim</label>
                    <input type="text" id="nim" name="nim" class="form-control form-control-alternative"  placeholder="Masukan Nim">
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="form-group">
                    <label class="form-control-label" for="input-nama">Nama</label>
                    <input type="text" id="nama" name="nama" class="form-control form-control-alternative" placeholder="Masukan Nama"  >
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="form-group">
                    <label class="form-control-label" for="input-username">Tahun masuk</label>
                    <input type="text" id="tahunmasuk" name="tahunmasuk" class="form-control form-control-alternative" placeholder="Masukan Tahun masuk">
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="form-group">
                    <label class="form-control-label" for="input-username">Tahun Ajaran</label>
                    <input type="integer" id="tahunajaran" name="tahunajaran" class="form-control form-control-alternative" placeholder="Masukan Tahun Ajaran">
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="form-group">
                    <label class="form-control-label" for="input-username">Semester</label>
                    <input type="integer" id="semester" name="semester" class="form-control form-control-alternative" placeholder="Masukan Semester">
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="form-group">
                    <label class="form-control-label" for="input-username">IPK</label>
                    <input type="double" id="ipk" name="ipk" class="form-control form-control-alternative" placeholder="Masukan IPK">
                  </div>
                </div>
                
                <div class="col-6 item-center">
                    <a href="" class=""></a><button type="submit" class="btn btn-primary">Tambah data</button>
                    <a href="" class=""></a><button type="submit" class="btn btn-success">Impor data excel</button>
                    {{-- <a href="" class=""></a><button class="btn btn-danger">Kembali</button> --}}
                </div>
              </div>
              
            </div>
            
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- Footer -->
  <footer class="footer">
    <div class="row align-items-center justify-content-xl-between">
      
      
    </div>
  </footer>
</div>