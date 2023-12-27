
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
    

    @yield('konten')
 

  </div>

        
  <!--   Core   -->
  @include('partials.footer')
</body>

</html>