{{-- <head class="head">UNIVERSITAS HALUOLEO</head> --}}


<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

<style>



  .centered-text {
    text-align: center;
}

    .kop{
      line-height: 2px;
      text-align: center;
    }

  p{
    font-family: 'Times New Roman', Times, serif;
    text-align: center;
    line-height: 15px;
    /* line-height: 10px; */
    /* margin-left:; */
  }

  .table{
    font-family: 'Times New Roman', Times, serif'
  }

  .footer{
    border-top: 1px solid rgb(0, 0, 0);
    width: 50%;
    margin: 0 auto;
    margin-top: 20px; 
    
  }

  .foot{
    border-top: 1px solid rgb(0, 0, 0);
    width: 50%;
    margin: 0 auto;
    /* margin-top: 10%; */
   
  }

  h6{
    /* margin-top: %; */
     font-size: 18px;
     font-family: 'Times New Roman', Times, serif;
     line-height: 15px;
     margin-bottom: 5px;
     
  }

    hr {
        border: none; /* Hilangkan garis bawaan */
        border-top: 4px solid black; /* Tentukan ketebalan dan warna garis */
        margin-top: -3%;
    }


    img {

        width: 168%;
        height: 13%;
        position: block;
        margin-bottom: 2rem;
        margin-left: 2rem;
        margin-top: 10px
    }

    .garis {
      border-top: 1px solid rgb(0, 0, 0);
      margin-top: -2%;
    }

     .kan{
      /* position: relative; */
      width: 4em;
      height: 10rem;
      margin-left: 2%;

      /* margin: 0 auto; */
      /* line-height: -10%; */
      /* margin-left: 10px; */
      /* margin-bottom: 10%; */
    }

    .kanp{
      position: relative;
      /* margin: 0 auto; */
      width: 4rem;
      height: 20rem;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .kanm{
      /* margin-block-start: 0%; */
      width: 4em;
      height: 30em;
      position: absolute;right: 75; top: 0; */
    }

    .img-container {
    display: flex;
    justify-content: space-between;
    width: 2em;
    height: 10em;
  }

  .left-image,
  .center-image,
  .right-image {
      width: 10px; /* Sesuaikan lebar gambar sesuai kebutuhan */
      height: 20em; /* Sesuaikan tinggi gambar sesuai kebutuhan */
  }

.center-image {
    margin: 0 auto;
}

.gambar{
  width: 5vh;
  height: 10vh;
}

.spacedline{
  line-height: 1.5;
  /* font-size: 12px; */
}

.date{
  margin-left: 74%;
  line-height: 1.5;
  /* font-size: 15px; */
}

u{
  font-family: 'Times New Roman', Times, serif;
  margin-left:80%;
}

.nip{
  margin-left: 78%;
  line-height: 1.5;
  font-size: 13px;
}

</style>

{{-- <header> --}}
<body>
  
    <table>
        <thead>
            <tr>
                <th scope="col mb-2" style="width: 10%">
                    <img src="asset/img/brand/LOGO UHO.png" alt="logo" >
                </th>
                <th scope="col">
                    <h6 class="text-center">KEMENTRIAN PENDIDIKAN, KEBUDAYAAN, </h6>
                    <h6  class="text-center">UNIVERSITAS HALUOLEO</h6>
                    <h6  class="text-center">RISET DAN TEKNOLOGI </h6>
                    <h6 class="text-center">FAKULTAS TEKNIK</h6>
                    <p class="kop mt-2" style="font-size: 15px"><small>Kampus Hijau Bumi Tridharma Anduonohu  Jl. H.E.A. Mokodompit,</small></p>
                    <p class="kop" style="font-size: 15px"><small>Telepon /fax (0401) 3195287, Kendari 93232 </small></p>
                    <p class="kop" style="font-size: 15px"><small>Laman: http//www.eng.uho.ac.id </small></p>
                      {{-- <img src="asset/img/brand/LOGO UHO.png" alt="logo" > --}}
                </th>
            </tr>
        </thead>
    </table>
    <hr>
     <p class="garis"></p>   
   
     {{-- Ini adalah beberapa&nbsp;&nbsp;spasi&nbsp;non-breaking. --}}

        <h6 style="font-size: 16px;"><small>Nomor &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: ....../UN29.10.1.1/PP/2023</small></h6>
        <h6 style="font-size: 16px;"><small>Lampiran&nbsp;&nbsp; : 1 lembar</small></h6>
        <h6 style="font-size: 16px;"><small>Perihal&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : Rekomendasi Evaluasi Mahasiswa Teknik Informatika</small></h6>
      {{-- </header>               --}}
        
    <br>

        {{-- <p class="isi" style="margin-left : 1cm;"><span><small>Dalam rangka memenuhi kualitas mahasiswa Jurusan Teknik Informatika segenap  tenaga pendidik mulai dari dosen hingga staff berpartisipasi penuh untuk mengembangkan kualitas mahasiswa jurusan teknik informatika agar lebih unggul. oleh karena itu dibuatlah sistem evaluasi mahasiswa yang akan mengevaluasi mahasiswa secara berkala dengan point point tertentu. Didalam tabel dibawah ini sudah tercangkum nama mahasiswa yang dalam menempuh perkuliahan dengan kriteria harus dievaluasi dikarenakan perolehan nilai indeks prestasi kumulatifnya sangat kurang dari apa yang sudah ditetapkan Jurusan Teknik Informatika.</small></span></p> --}}

          <div class="table" style="width: 100%">
            <table class="table  table-bordered text-center ml-1" style="font-size: 12px">
              <thead class="thead-light ">
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Nim</th>
                  <th scope="col">Nama mahasiswa</th>
                  {{-- <th scope="col">Tahun Akademik</th> --}}
                  <th scope="col">Semester </th>
                  <th scope="col">Jumlah SKS yang diluluskan </th>

                  <th scope="col">IPK</th>
                </tr>
              </thead>
              <tbody>
                <?php
                  $no =1;  
                ?>
                @if(@isset($data))
                  @foreach($data as $item ) 
              
                <tr>
                  <td>
                    {{$no++}}      
                  </td>
                  <td scope="row">
                    <div class="media align-items-center">
                      <div class="media-body">
                        <span class="mb-0 ">{{ $item->nim }}</span>
                      </div>
                    </div>
                  </td>
                  <td>
                    {{$item ->nama}}      
                  </td>
                  
                  <td>
                    
                    {{ $item->semester }}
                  </td>
                  <td>
                    
                    {{ $item->jumlahsks }}
                  </td>
                  
                 
                  <td>
                    {{ $item->ipk }}
 
                
                </tr>
                @endforeach
                @endif
  
              </tbody>
              
            </table>
          </div>
    
<br> 
<p class="spacedline">Mengetahui Ketua Jurusan <br> Teknik informatika</p>


    <p class="date">Kendari {{ $date }}</p>
 {{-- <h6 class="text-center"><small><strong>Mengetahui</strong></small></h6> --}}
 <br>
 <br>
 {{-- <br> --}}
 <u class="">Isnawaty, S.Si.,M.T </u>
 <p class="nip">197220120101192002</p>



</body>

            {{-- <table>
                <thead>
                    <tr>
                        <th scope="col mb" style="width: 14cm">
                            <h6><small><strong>Ketua Jurusan Teknik Informatika</strong></small></h6>
                        </th>    
                        <th scope="col">
                            <h6><small><strong>Dekan Fakultas Teknik</strong></small></h6>
                        </th>    
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <br><br><br><br>
                            <h6 class=""><small><strong><u>Isnawaty, S.Si,MT</u></strong></small></h6>
                            
                        </td>
                        <td>
                            <br><br><br><br>
                            <h6><small><strong><u>Dr. Edward Ngii, MT</u></strong></small></h6>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            
                            <h6 class="mt--2"><small><strong>NIP: 123456789012345</strong></small></h6>
                            
                        </td>
                        <td>
                            
                            <h6><small><strong>NIP: 1234567890212345</strong></small></h6>
                        </td>
                    </tr>
                </tbody>
                
            </table> --}}
           
      {{-- <footer> --}}
            {{-- <p class="footer" style=""></p>

          <table class="gambar ">
              <th>
                  <img src="asset/img/brand/uhobisa.png"  class="left" alt="logo" >
              </th>
              <th>
                <img src="asset/img/brand/kan.png"  class="center" alt="logo" >
              </th>
              <th>
                <img src="asset/img/brand/kampusmerdeka.jpg" class="right" alt="logo" >
              </th>
          </table>
            <div class="img-container">
            </div>
            
            <p class="foot" style=""></p>


          </footer> --}}





{{-- <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> --}}
{{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script> --}}
