
@include('partials.header')


<body class="">
  {{-- navbar --}}
  @include('partials.sidebar')  

  {{-- main content --}}
  <div class="main-content">
    <nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
      <div class="container-fluid">
        <!-- Brand -->
        <a class="h3 mb-0 mt-4 text-white text-uppercase d-none d-lg-inline-block" href="">@yield('judul_halaman','Formulir data excel')</a>
  
        {{-- @yield('partials.kontenuser') --}}

        @include('partials.user')
      </div>
    </nav>
    <!-- End Navbar -->
    <!-- Header -->
    @include('partials.card')
    

<div class="container-fluid mt--7">
    <div class="row">
     
      <div class="col-xl-12 order-xl-1">
        <div class="card bg-secondary shadow">
          <div class="card-header bg-white border-0">
            <div class="row align-items-center">
              <div class="col-12">
                <h3 class="mb-0">Formulir Tambah Data Excel</h3>
              </div>
              
            </div>
          </div>
          <div class="card-body">
            <form action="{{ route('importdata') }}" method="POST" enctype="multipart/form-data">
              {{ csrf_field() }}
              @method('POST')
              {{-- <h6 class="heading-md text-muted mb-4">Formulir Tambah data</h6> --}}
              <div class="pl-lg-4">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="form-group">
                      <label class="form-control-label" for="input-username">File excel</label>
                      <input type="file" id="file" name="file" class="form-control form-control-alternative"  placeholder="Masukan Nim">
                        @error('nim')
                            <small>{{ $message }}</small>
                        @enderror
                    </div>
                  </div>
                  <div class="col text-center">
                      <a href="" class=""></a><button type="submit" class="btn btn-primary btn-lg btn-block">Upload data</button>
                  </div>

                </div>
                <div style="margin-top: 20px">
                  <a href="{{ url('/unduh-template-excel') }}">Klik di sini untuk mengunduh template Excel</a>
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




  </div>

        
  <!--   Core   -->
  @include('partials.footer')
</body>

</html>    


  

@section('judul','Upload Data Mahasiswa')
@section('konten')
{{-- @include('partials.card')  --}}

@section('judul_halaman','Upload Data Mahasiswa')

<div class="container-fluid mt--7">
    <div class="row">
     
      <div class="col-xl-12 order-xl-1">
        <div class="card bg-secondary shadow">
          <div class="card-header bg-white border-0">
            <div class="row align-items-center">
              <div class="col-12">
                <h3 class="mb-0">Formulir Tambah Data Excel</h3>
              </div>
              
            </div>
          </div>
          <div class="card-body">
            <form action="{{ route('importdata') }}" method="POST" enctype="multipart/form-data">
              {{ csrf_field() }}
              @method('POST')
              {{-- <h6 class="heading-md text-muted mb-4">Formulir Tambah data</h6> --}}
              <div class="pl-lg-4">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="form-group">
                      <label class="form-control-label" for="input-username">File excel</label>
                      <input type="file" id="nim" name="file" class="form-control form-control-alternative"  placeholder="Masukan Nim">
                        @error('nim')
                            <small>{{ $message }}</small>
                        @enderror
                    </div>
                  </div>
                  
                  <div class="col text-center">
                      <a href="" class=""></a><button type="submit" class="btn btn-primary btn-lg btn-block">Upload data</button>
                    
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




@endsection
    
{{-- @endsection  --}}

{{-- @endsection --}}




   
  
  



