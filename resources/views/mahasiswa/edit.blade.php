@extends('mahasiswa.template')

@section('konten')
@section('judul_halaman','Formulir Edit Data ')

<div class="container-fluid mt--7">
    <div class="row">
     
      <div class="col-xl-12 order-xl-1">
        <div class="card bg-secondary shadow">
          <div class="card-header bg-white border-0">
            <div class="row align-items-center">
              <div class="col-12">
                <h3 class="mb-0">Formulir Edit Data</h3>
              </div>
              
            </div>
          </div>
          <div class="card-body">
            <form action="{{ route('update',['id' => $data->id]) }}" method="POST">
              {{ csrf_field() }}
              @method('PUT')
              {{-- <h6 class="heading-md text-muted mb-4">Formulir Tambah data</h6> --}}
              <div class="pl-lg-4">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="form-group">
                      <label class="form-control-label" for="input-nim">Nim</label>
                      <input type="text" id="nim" name="nim" class="form-control form-control-alternative"  value="{{ $data->nim }}" placeholder="Masukan Nim">
                        @error('nim')
                            <small>{{ $message }}</small>
                        @enderror
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="form-group">
                      <label class="form-control-label" for="input-nama">Nama</label>
                      <input type="text" id="nama" name="nama" class="form-control form-control-alternative" value="{{ $data->nama }}" placeholder="Masukan Nama"  >
                        @error('nama')
                            <small>{{ $message }}</small>
                        @enderror
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="form-group">
                      <label class="form-control-label" for="input-username">Tahun akademik</label>
                      <input type="text" id="tahun" name="tahun" class="form-control form-control-alternative"value="{{ $data->tahun }} " placeholder="Masukan Tahun masuk">
                    @error('tahun')
                      <small>{{ $message }}</small>
                    @enderror
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="form-group">
                      <label class="form-control-label" for="input-username">Semester</label>
                      <input type="integer" id="semester" name="semester" class="form-control form-control-alternative" value="{{ $data->semester }} "placeholder="Masukan Semester">
                        @error('semester')
                            <small>{{ $message }}</small>
                        @enderror
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="form-group">
                      <label class="form-control-label" for="input-username">Jumlah SKS</label>
                      <input type="integer" id="jumlahsks" name="jumlahsks" class="form-control form-control-alternative" value="{{ $data->jumlahsks }} "placeholder="Masukan Jumlah SKS">
                        @error('jumlahsks')
                            <small>{{ $message }}</small>
                        @enderror
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="form-group">
                      <label class="form-control-label" for="input-username">IPK</label>
                      <input type="double" id="ipk" name="ipk" class="form-control form-control-alternative" value="{{ $data->ipk }} "placeholder="Masukan IPK">
                        @error('ipk')
                            <small>{{ $message }}</small>
                        @enderror
                    </div>
                  </div>
                  
                  <div class="col-6 item-center">
                      <a href="" class=""></a><button type="submit" class="btn btn-primary">Edit data</button>
                  </div>
                </div>
                
              </div>
              
              </div>
            </form>
          </div>
        </div>
      </div>
      <footer class="footer">
        
      </footer>
    </div>
    <!-- Footer -->
    
  </div>




@endsection
