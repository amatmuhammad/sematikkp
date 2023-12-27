
@extends('mahasiswa.template')
@section('judul','Evaluasi Mahasiswa')

@section('konten')

@section('judul_halaman','Evaluasi Mahasiswa')


<div class="container-fluid mt--7">
  <div class="row">
    <div class="col">
      <div class="card shadow">
        <div class="card-header border-1">
          <h3 class="mb-0">Data Mahasiswa</h3>

         

          <form class="class" action="{{ route('indexeval') }}" method="GET">
            <div class="row " style="margin-left: 35rem">
              <div class="col-sm-5">
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
              <div class="col-sm-4">
                <label for="">Semester</label>
                <input class="form-control" type="text" name="semester" value="{{ Request::get('semester')  }}" placeholder="Semester">

              </div>

                <div class="col-sm-3" style="margin-top: 32px">
                    <button type="submit" class="btn btn-primary">filter</button>  

                </div>
            </form>

          {{-- <div class="container  mb-3"> --}}
        </div>
        </div>
        {{-- asas --}}
        
        <!-- Large button groups (default and split) -->
        
        
        
        <div class="table-responsive">
          <table class="table text-center table-flush">
            <thead class="thead-light text-center">
              <tr>
                
                {{-- <th scope="col">No</th> --}}
                <th scope="col">Nim</th>
                <th scope="col">Nama mahasiswa</th>
                {{-- <th scope="col">Tahun Masuk</th> --}}
                <th scope="col">Tahun Akademik</th>
                <th scope="col">Semester </th>
                <th scope="col">IPK </th>
                {{-- <th scope="col">Aksi</th> --}}

              </tr>
            </thead>
            <tbody>
              
          

              {{-- @if(@isset($sematik))   --}}
                @foreach($sematik as $item) 
              {{-- <option value="{{ $item->id }}">{{ $item->nama }}</option> --}}
              <tr>
               
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
                  {{-- ipsemeter 3 --}}
                </td>
                <td>
                  
                  {{ $item->semester }}
                  {{-- ipsemester5 --}}
                </td>
                
               
                <td>
                  {{ $item->ipk }}
                  
                  
                  {{-- ipsemester5 --}}
                </td>
              
                {{-- <td>
                 

                  <form action="{{ route('konfirmasi',['id' => $item->id]) }}" method="POST">
                    @csrf
                    @method('POST')
                  
                    <button id="tombolKlik" type="submit" name="konfirmasi" class=" btn btn-danger btn-sm"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                      <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                      <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                    </svg></button>
                  
                  </form> 
              
                </td> --}}
              </tr>
              
              @endforeach
             
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

@endsection
    