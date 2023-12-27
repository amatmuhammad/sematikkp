
@extends('mahasiswa.template')

@section('judul','Data Mahasiswa')
@section('konten')
{{-- @include('partials.card')  --}}
@section('judul_halaman','Data Mahasiswa')




{{-- <h1>tes</h1> --}}
<div class="container-fluid mt--8">
  <!-- Table -->  
    <div class="row">
      <div class="col col-lg-6 " style="margin-bottom: 10px">
        <form class="d-flex" role="search" method="GET" action="{{ route('search') }}">
          <input class="form-control" name="keyword" type="search" placeholder="Cari berdasarkan Nim dan Nama" aria-label="" value="{{ app('request')->input('keyword') }}">
            <button class="btn btn-primary" type="submit">Cari Data</button>
          </form>
      </div>
      
      @can('admin')
        
        <div class="btn-group mb-2 ml-4">
          <a href="{{ route('create') }}" class=""><button class="btn btn-md btn-primary ">Tambah data (+)</button></a>
        </div>
        <div class="btn-group mb-2 ml-2">
          <a href="{{ route('impor') }}" class=""><button class="btn btn-md btn-success ">Tambah data excel (+)</button></a>
        </div>
        
        <div class="btn-group mb-4 ml-2" >
          <a href="{{ route('downloaddata') }}"  class="">
            <button type="button" class="btn btn-md btn-warning ">Download excel</button>
          </a>
        </div>
      @endcan

      </div>

  <div class="row">
    <div class="col">
      <div class="card shadow">
        <div class="card-header border-1">
          <h3 class="mb-0">Data Mahasiswa</h3> 
          <form class="class" action="{{ route('mahasiswa') }}" method="GET">
            <div class="row " style="margin-left: 35rem">
              <div class="col-sm-5">
                <label for="" class="form-label" >Tahun</label>
                <select name="tahun" id="tahun"  class="custom-select" >
                  <option selected>Pilih tahun</option>
                  <option value="2020" {{ Request::get('tahun') == '2020' ? 'selected':'' }} >2020</option>
                  <option value="2021" {{ Request::get('tahun') == '2021' ? 'selected':'' }}>2021</option>
                  <option value="2022" {{ Request::get('tahun') == '2022' ? 'selected':'' }}>2022</option>
                  <option value="2023" {{ Request::get('tahun') == '2023' ? 'selected':'' }}>2023</option>
                  <option value="2024" {{ Request::get('tahun') == '2024' ? 'selected':'' }}>2024</option>
                  <option value="2026" {{ Request::get('tahun') == '2026' ? 'selected':'' }}>2026</option>
                </select>  
              </div>
              <div class="col-sm-4">
                <label for="">Semester</label>
                <input class="form-control" type="text" name="semester" value="{{ Request::get('semester')  }}" placeholder="Semester">
              </div>

                <div class="col-sm-3" style="margin-top: 32px">
                    <button type="submit" class="btn btn-primary">filter</button>  
                </div>
            </form>
         
      </div>
  </div>
        <div class="table-responsive">
          <table class="table text-center table-flush">
            <thead class="thead-light text-center">
              <tr>
                
                {{-- <th scope="col">No</th> --}}
                <th scope="col">Nim</th>
                <th scope="col">Nama mahasiswa</th>
                <th scope="col">Tahun Akademik</th>
                <th scope="col">Semester </th>
                <th scope="col">Jumlah SKS </th>
                <th scope="col">IPK</th>
                {{-- <th scope="col">Status</th> --}}
                @can('admin')
                <th scope="col">Aksi</th>
                @endcan

              </tr>
            </thead>
            <tbody>
             
              {{-- @if(@isset($sematik)) --}}
                @foreach($sematik as $item ) 
              {{-- <option value="{{ $item->id }}">{{ $item->nama }}</option> --}}
              <tr>
                {{-- <td>
                  {{$item->id}}      
                </td> --}}
                <th scope="row">
                  <div class="media align-items-center">
                    <div class="media-body">
                      <span class="mb-0 text-sm">{{ $item->nim }}</span>
                    </div>
                  </div>
                </th>
                <td>
                  {{$item ->nama}}      
                </td>                
                <td>
                 {{ $item->tahun}}
                  
                </td>
                <td>
                  
                  {{ $item->semester }}
                </td>
                <td>
                  
                  {{ $item->jumlahsks }}
                </td>
                
               
                <td>
                  {{ $item->ipk }}
                  
                </td>
                @can('admin')
                <td>
                  <a href="{{ route('edit',['id' => $item->id]) }}"><button type="button" class="btn btn-primary"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                    <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
                  </svg></button></a>
                  <a href="#" class="btn btn-danger delete" data-id="{{ $item->id }}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z"/>
                    <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z"/>
                  </svg></a>
                  {{-- /destroy/{{ $item->id }} --}}
                  {{-- ipsemester 7 {{ route('delete', $item->id) }}" onclick="return confirm('Anda yakin untuk menghapus data ini?') --}}
                </td>
                @endcan

              </tr>
              @endforeach
              {{-- @endif   --}}

            </tbody>
            
          </table>
        </div>
        <div class="card-footer py-4">
          {{ $sematik->links() }}
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
{{-- @include('partials.form') --}}
<script src="https://code.jquery.com/jquery-3.7.0.slim.js" integrity="sha256-7GO+jepT9gJe9LB4XFf8snVOjX3iYNb0FHYr5LI1N5c=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    $('.delete' ).click(function(){
      // Swal.fire('Any fool can use a computer')
      // var hapusdata = $item->nim;  
      var hapusdata = $(this).attr('data-id')



        const swalWithBootstrapButtons = Swal.mixin({
        customClass: {
        confirmButton: 'btn btn-success',
        cancelButton: 'btn btn-danger'
        },
        buttonsStyling: false
      })

        swalWithBootstrapButtons.fire({
          title: 'Apakah anda yakin??',
          text: "Menghapus data mahasiswa ini?",
          icon: 'warning',
          showCancelButton: true,
          cancelButtonText: 'Tidak',  
          confirmButtonText: 'Iya, Saya yakin',
          reverseButtons: false
        }).then((result) => {
          if (result.isConfirmed) {
            window.location = '/destroy/'+hapusdata+' '
            swalWithBootstrapButtons.fire(
              'Terhapus!',
              '',
              'success'
            )
          } else if (
            /* Read more about handling dismissals below */
            result.dismiss === Swal.DismissReason.cancel
          ) {
            swalWithBootstrapButtons.fire(
              'Tidak dihapus',
              'Data anda tidak jadi dihapus',
              'error'
            )
          }
        })

        // Swal.fire({
        //   title: 'Apakah anda yakin?',
        //   text: "Menghapus data mahasiswa dengan id = "+hapusdata+" ",
        //   icon: 'warning',
        //   showCancelButton: true,
        //   confirmButtonColor: '#3085d6',
        //   cancelButtonColor: '#d33',
        //   // cancelButtonText : 'Tidak',
        //   confirmButtonText: 'Iya,Hapus'
        // }).then((result) => {
        //   if (result.isConfirmed) {
        //     window.location = '/destroy/'+hapusdata+' '
        //     Swal.fire(
        //       'Data Terhapus!',
        //       '',
        //       'success'
        //     )
        //   }
        // })
    });

   
</script>
@endsection
    
{{-- @endsection  --}}