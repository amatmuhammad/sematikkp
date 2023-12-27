
@include('partials.header')


<body class="">
  {{-- navbar --}}
  @include('partials.sidebar')  

  {{-- main content --}}
  <div class="main-content">
    <nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
      <div class="container-fluid">
        <!-- Brand -->
        <a class="h3 mb-0 mt-4 text-white text-uppercase d-none d-lg-inline-block" href="">@yield('judul_halaman','Beranda')</a>
  
        {{-- @yield('partials.kontenuser') --}}

        @include('partials.user')
      </div>
    </nav>
    <!-- End Navbar -->
    <!-- Header -->
    @include('partials.card')
    

        <div class="container-fluid mt--7">
          <!-- Table -->  
        <div class="row">
          <div class="col">
            <div class="card shadow">
              <div class="card-header ">

                <div class="row">
                  <div class="col ml-7">
                    <img alt="Image placeholder" src="{{ asset('asset/img/brand/rafikiiq.png') }} " style="width: 80%"> 
                </div>
                <div class="col">
                  <h2 class="" style="margin-top: 3rem"><strong>Selamat Datang, {{ auth()->user()->username }} di
                    <span> Sistem Evaluasi Mahasiswa Teknik Informatika </span></strong></h2>
                      <p> <b>Evaluasi mahasiswa berdasarkan Peraturan Rektor Nomor 1 tahun 2019, peraturan evaluasi tersebut tercantum pada BAB XVI Penyelesaian program pasal 73 dan 74.  </b></p>
                      <a href="{{ asset('asset/peraturan rektor.pdf') }}">Klik disini untuk mendownload </a>
                </div>
              </div>
              </div>
            </div>
          </div>
          </div>
          <footer class="footer">
            <div class="row align-items-center justify-content-xl-between">
              <div class="col-xl-6">
                <div class="copyright text-center text-xl-left text-muted">
                  <p href=""> Teknik Informatika UHO</p>
                </div>
              </div>
              
            </div>
          </footer>
        </div>
        <br>
        
  </div>

        
  <!--   Core   -->
  @include('partials.footer')
</body>

</html>