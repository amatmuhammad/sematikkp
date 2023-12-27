

<script src="{{ asset('asset/js/plugins/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ asset('asset/js/plugins/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>


<!--   Argon JS   -->
<script src="{{ asset('asset/js/argon-dashboard.min.js?v=1.1.2') }}"></script>
<script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>
<script>
  window.TrackJS &&
    TrackJS.install({
      token: "ee6fab19c5a04ac1a32a645abde4613a",
      application: "argon-dashboard-free"
    });
</script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <!-- endinject -->

  @if ($message = Session::get('success'))
      <script>
        Swal.fire({
            icon: 'success',
            title: '{{ $message }}',
            text: '',
        });
      </script>
  @endif
  @if ($message = Session::get('failed'))
      <script>
        Swal.fire({
            icon: 'error',
            title: 'Ups...',
            text: '{{ $message }}',
            // footer: '<a href="">Why do I have this issue?</a>' 
        });
      </script>
  @endif
  
    
    