<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Masuk</title>
  <!-- base:css -->
  <link rel="stylesheet" href="{{ asset('asset2/vendors/mdi/css/materialdesignicons.min.css') }}">
  <link rel="stylesheet" href="{{ asset('asset2/vendors/css/vendor.bundle.base.css') }}">

  <link rel="stylesheet" href="{{ asset('asset2/css/style.css') }}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{ asset('asset/img/brand/LOGO UHO.png') }}" />
</head>

<body>
  <div class="container-scroller d-flex">
    <div class="container-fluid page-body-wrapper full-page-wrapper d-flex">
      <div class="content-wrapper d-flex align-items-stretch auth auth-img-bg">
        <div class="row flex-grow">
          <div class="col-lg-6 d-flex align-items-center justify-content-center">
            <div class="auth-form-transparent text-left p-3">
              <div class="brand-logo text-center">
                <img src="{{ asset('asset2/images/logo sematik oke.png') }}" alt="logo">
              </div>

              <form action="{{ route('loginproses') }}" method="POST" class="user pt-3 ">
                @csrf
                <div class="form-group">
                  <label for="exampleInputEmail">Username</label>
                  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        <i class="mdi mdi-account-outline text-primary"></i>
                      </span>
                    </div>
                    <input type="text"  name="username"   class="form-control form-control-lg border-left-0" id="exampleInputEmail" placeholder="Username">
                  </div>
                  @error('username')
                      <small>{{ $message }}</small>
                  @enderror
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword">Password</label>
                  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        <i class="mdi mdi-lock-outline text-primary"></i>
                      </span>
                    </div>
                    <input type="password" name="password" class="form-control form-control-lg border-left-0" id="exampleInputPassword" placeholder="Password">                        
                  </div>
                  @error('password')
                      <small>{{ $message }}</small>
                  @enderror
                </div>
               
                <div class="my-3 text-center">
                  <button class="btn-primary btn-lg font-weight-medium auth-form-btn" type="submit">MASUK</button>
                </div>
                
                <div class="text-center mt-4 font-weight-light ">
                  Belum punya akun silahkan <a href="{{ route('daftar') }}" class="text-info ">Daftar</a>
                </div>
              </form>
            </div>
          </div>
          <div class="col-lg-6 login-half-bg d-none d-lg-flex flex-row">
            <p class="text-white font-weight-medium text-center flex-grow align-self-end"></p>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- base:js -->
  <script src="{{ asset('asset2/vendors/js/vendor.bundle.base.js') }}"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="{{ asset('asset2/js/off-canvas.js') }}"></script>
  <script src="{{ asset('asset2/js/hoverable-collapse.js') }}"></script>
  <script src="{{ asset('asset2/js/template.js') }}"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <!-- endinject -->

  @if ($message = Session::get('success'))
      <script>
        Swal.fire({
            icon: 'success',
            title: '{{ $message }}',
            text: '',
            // footer: '<a href="">Why do I have this issue?</a>' 
        });
      </script>
  @endif
  @if ($message = Session::get('failed'))
      <script>
        Swal.fire({
            icon: 'error',
            title: 'Coba Cek lagi',
            text: '{{ $message }}',
            // footer: '<a href="">Why do I have this issue?</a>' 
        });
      </script>
  @endif
</body>

</html>
