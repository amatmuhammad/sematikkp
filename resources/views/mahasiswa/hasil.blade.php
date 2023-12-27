
@extends('mahasiswa.template')

@section('judul','Hasil evaluasi')
@section('konten')
{{-- @include('partials.card')  --}}

@section('judul_halaman','Hasil Evaluasi Mahasiswa')



<div class="container-fluid mt--7">

    <div class="row">
      <div class="col col-lg-12 mb-3">
        <form class="d-flex" role="search" method="GET" action="{{ route('searchhasil') }}">
          <input class="form-control" name="keyword" type="search" placeholder="Cari data mahasiswa" aria-label="">
            <button class="btn btn-primary" type="submit">Cari Data</button>
          </form>
      </div>
       {{-- <div class="btn-group mb-4 ml-2">
            <a href="{{ route('create') }}" class=""><button class="btn btn-lg btn-primary ">Tambah data (+)</button></a>
        </div> --}}
    </div>
  <div class="row">
    <div class="col">
      <div class="card shadow">
        <div class="card-header border-1">
          <h3 class="mb-0">Data Mahasiswa</h3>
        <form class="class" action="{{ route('indexhasil') }}" method="GET">
          <div class="row " style="margin-left: 25rem">
            <div class="col-sm-3">
              <label for="" class="form-label" >Tahun</label>
              <select name="tahun" id="tahun"  class="custom-select" >
                <option selected>pilih tahun</option>
                <option value="2020" {{ Request::get('tahun') == '2020' ? 'selected':'' }} >2020</option>
                <option value="2021" {{ Request::get('tahun') == '2021' ? 'selected':'' }}>2021</option>
                <option value="2022" {{ Request::get('tahun') == '2022' ? 'selected':'' }}>2022</option>
                <option value="2023" {{ Request::get('tahun') == '2023' ? 'selected':'' }}>2023</option>
                <option value="2024" {{ Request::get('tahun') == '2024' ? 'selected':'' }}>2024</option>
                <option value="2026" {{ Request::get('tahun') == '2026' ? 'selected':'' }}>2026</option>
              </select>  
            </div>
            <div class="col-sm-3">
              <label for="">Semester</label>
              <input class="form-control" type="text" name="semester" value="{{ Request::get('semester')  }}" placeholder="Semester">

            </div>

              <div class="col-sm-2" style="margin-top: 32px">
                  <button type="submit" class="btn btn-primary">filter</button>  

              </div>
              <div class="col-sm-3" style="margin-top: 32px">
                <a href="{{ route('cetak') }}">
                <button class="btn btn-danger" type="button" >
                  Cetak Hasil Evaluasi
                </button>
              </a>
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
                <th scope="col">Jumlah SKS yang diluluskan</th>
                <th scope="col">IPK</th>
                {{-- <th scope="col">Status</th> --}}
                <th scope="col">Status</th>

              </tr>
            </thead>
            <tbody>
              
              @if(@isset($sematik))
                @foreach($sematik as $item) 
              {{-- <option value="{{ $item->id }}">{{ $item->nama }}</option> --}}
              <tr>
                {{-- <td> --}}
                  {{-- {{$item->id}}       --}}
                {{-- </td> --}}
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
                  {{ $item->tahun }}
                  {{-- ipsemeter 3 --}}
                </td>
                <td>
                  
                  {{ $item->semester }}
                  {{-- ipsemester5 --}}
                </td>
                <td>
                  
                  {{ $item->jumlahsks }}
                  {{-- ipsemester5 --}}
                </td>
                
               
                <td>
                  {{ $item->ipk}}
                  
                  
                  {{-- ipsemester5 --}}
                </td>
                <td>
                            <!-- Tampilan data lainnya -->
                            {{-- $item->jumlahsks < 50 |  $item->ipk <1.99 --}}
                            @if ($item->semester == 3 && $item->jumlahsks <=40 && $item->ipk <=1.99)
                              <span class="badge badge-lg badge-danger">Evaluasi</span>
                            @elseif ($item->semester == 5 && $item->jumlahsks <=70 || $item->ipk <=1.99)
                              <span class="badge badge-lg badge-danger">Evaluasi</span>
                            @elseif ($item->semester == 7 && $item->jumlahsks <=95 || $item->ipk <=1.99)
                              <span class="badge badge-lg badge-danger">Evaluasi</span>
                            @elseif ($item->semester == 14 && $item->jumlahsks <=135 || $item->ipk <=1.99)
                              <span class="badge badge-lg badge-danger">Evaluasi</span>
                            @else
                              <span class="badge badge-lg badge-success">Tidak Evaluasi</span>
                              @endif

                    </td>
              </tr>
              @endforeach
              @endif

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

@endsection
    
{{-- @endsection --}}   