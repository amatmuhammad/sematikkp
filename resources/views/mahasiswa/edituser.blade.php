@extends('mahasiswa.template')

@section('konten')
@section('judul_halaman','Formulir Edit Data User ')

<div class="container-fluid mt--7">
    <div class="row">
     
      <div class="col-xl-12 order-xl-1">
        <div class="card bg-secondary shadow">
          <div class="card-header bg-white border-0">
            <div class="row align-items-center">
              <div class="col-12">
                <h3 class="mb-0">Formulir Edit Data User</h3>
              </div>
              
            </div>
          </div>
          <div class="card-body">
            <form action="{{ route('updateUser',['id' => $data->id])}}" method="POST">
              {{ csrf_field() }}
              @method('PUT')
              {{-- <h6 class="heading-md text-muted mb-4">Formulir Tambah data</h6> --}}
              <div class="pl-lg-4">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="form-group">
                      <label class="form-control-label" for="input-nim">Username</label>
                      <input type="text" id="username" name="username" class="form-control form-control-alternative"  value="{{ $data->username }}" >
                        @error('username')
                            <small>{{ $message }}</small>
                        @enderror
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="form-group">
                      <label class="form-control-label" for="input-nama">Password</label>
                      <input type="text" id="password" name="password" class="form-control form-control-alternative"  >
                        @error('pass')
                            <small>{{ $message }}</small>
                        @enderror
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="form-group">
                      <label class="form-control-label" for="input-username">level</label>
                      <input type="text" id="level" name="level" class="form-control form-control-alternative"value="{{ $data->level }} " >
                    @error('level')
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
