@extends('layouts.web')
@section('styles')
<style type="text/css">
 
.tab {
  float: left;
  border: 1px solid #ccc;
  background-color: #ff8604;
  width: 30%;
  height: 300px;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}

/* Style the buttons inside the tab */
.tab button {
  display: block;
  background-color: inherit;
  color: black;
  padding: 22px 16px;
  width: 100%;
  border: none;
  outline: none;
  text-align: left;
  cursor: pointer;
  transition: 0.3s;
  font-size: 17px;
  border-bottom:  1px solid #ddd;

}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #feb465;
  border-right: 5px solid red;

}

/* Create an active/current "tab button" class */
.tab button.active {
  background-color: #feb465;
  border-right: 5px solid red;
}

/* Style the tab content */
.tabcontent {
  float: left;
  padding: 0px 12px;
  border: 1px solid #ccc;
  width: 70%;
  border-left: none;
  height: 300px;
 
}
</style>
@endsection
@section('content')
<ul class="breadcrumb">
    <li>Program Studi</li>
    <li class="active">Hub Internasional</li>
  </ul>
<div class="container" style="margin-top: 20px">

  <div class="page-header">
    <h3>HUBUNGAN INTERNASIONAL</h3>
  </div>


  <div class="row">
    <div class="col-md-12 wow slideInUp"  data-wow-duration="2s">
      <div class="tab">
        <button class="tablinks" onclick="openCity(event, 'Visi')" id="defaultOpen">VISI</button>
        <button class="tablinks" onclick="openCity(event, 'Misi')">MISI</button>
        <button class="tablinks" onclick="openCity(event, 'Tujuan')">TUJUAN</button>
      </div>

      <div id="Visi" class="tabcontent">
        <h3>Visi</h3>
        <p> {!! $visimisi[0]->Visi !!}</p>
      </div>

      <div id="Misi" class="tabcontent">
        <h3>Misi</h3>
        <p> {!! $visimisi[0]->Misi !!}</p> 
      </div>

      <div id="Tujuan" class="tabcontent">
        <h3>Tujuan</h3>
        <p> {!! $visimisi[0]->Tujuan !!}</p>
      </div>
    </div>
  </div>


  <div class="row">
  <div class="container">
    
<h3 class="sub-header">KURIKULUM PROGRAM STUDI ADMINISTRASI NEGARA</h3>


<div class="table-responsive wow slideInUp"  data-wow-duration="3s"> 
  <table class="table table-striped">
  <tr>
    <th>Semester 1</th>
  </tr>
  <tr>
    <th>No</th>
    <th>Kode MK</th>
    <th>Mata Kuliah</th>
    <th>SKS</th>
  </tr>
  <tr>
    <td> 1 </td>
    <td> SHI 101 </td>
    <td> Pendidikan Agama</td>
    <td> 2 </td>
  </tr>
  <tr>
    <td> 2 </td>
    <td> SHI 103 </td>
    <td> Pendidikan Pancasila</td>
    <td> 2 </td>
  </tr>
  <tr>
    <td> 3 </td>
    <td> SHI 105 </td>
    <td> Pengantar Ilmu Politik</td>
    <td> 3 </td>
  </tr>
  <tr>
    <td> 4 </td>
    <td> SHI 107</td>
    <td> Pengantar Sosiologi</td>
    <td> 3 </td>
  </tr>
  <tr>
    <td> 5 </td>
    <td> SHI 109 </td>
    <td> Pengantar Ilmu Hukum </td>
    <td> 3 </td>
  </tr>
  <tr>
    <td> 6 </td>
    <td> SHI 111 </td>
    <td> Pengantar Hubungan Internasional</td>
    <td> 3</td>
  </tr>
   <tr>
    <td> 7 </td>
    <td> SHI 113</td>
    <td> Ekonomi dan Pembangunan Nasional </td>
    <td> 3 </td>
  </tr>
   <tr>
    <td> 8 </td>
    <td> SHI 115 </td>
    <td> Sejarah Hubungan Internasional </td>
    <td> 3 </td>
  </tr>
  <tr>
    <th></th>
    <th></th>
    <th>Jumlah</th>
    <th>22</th>
  </tr>
  <tr>
    <th>Semester 2</th>
  </tr>
  <tr>
    <th>No</th>
    <th>Kode MK</th>
    <th>Mata Kuliah</th>
    <th>SKS</th>
  </tr>
  <tr>
    <td> 1 </td>
    <td> SHI 102</td>
    <td> Bahasa Inggris</td>
    <td> 3 </td>
  </tr>
  <tr>
    <td> 2 </td>
    <td> SHI 104</td>
    <td> Bahasa Asing I</td>
    <td> 3 </td>
  </tr>
  <tr>
    <td> 3 </td>
    <td> SHI 106</td>
    <td> Filsafat Ilmu Pengetahuan</td>
    <td> 3 </td>
  </tr>
  <tr>
    <td> 4 </td>
    <td> SHI 108 </td>
    <td> Sistem Politik Indonesia</td>
    <td> 3 </td>
  </tr>

  <tr>
    <td> 5 </td>
    <td> SHI 110 </td>
    <td> Metode Penelitian Sosial </td>
    <td> 3 </td>
  </tr>
  <tr>
    <td> 6 </td>
    <td> SHI 112 </td>
    <td> Pendidikan Kewarganegaraan dan Pemikiran Prof. Dr. Moestopo </td>
    <td> 2 </td>
  </tr>
   <tr>
    <td> 7 </td>
    <td>SHI 114 </td>
    <td> Kewirausahaan </td>
    <td> 2 </td>
    </tr>
    <tr>
    <td> 8 </td>
    <td>SHI 116 </td>
    <td> Teori Hubungan Internasional </td>
    <td> 3 </td>
    </tr>
  <tr>
    <th></th>
    <th></th>
    <th>Jumlah</th>
    <th>22</th>
  </tr>

  <tr>
    <th>Semester 3</th>
  </tr>
  <tr>
    <th>No</th>
    <th>Kode MK</th>
    <th>Mata Kuliah</th>
    <th>SKS</th>
  </tr>
  <tr>
    <td> 1 </td>
    <td> SHI 201</td>
    <td> Bahasa Inggris HI</td>
    <td> 3 </td>
  </tr>
  <tr>
    <td> 2 </td>
    <td> SHI 203 </td>
    <td> Bahasa Asing II</td>
    <td> 3 </td>
  </tr>
  <tr>
    <td> 3 </td>
    <td> SHI 205 </td>
    <td> Statistik Sosial </td>
    <td> 3 </td>
  </tr>
  <tr>
    <td> 4 </td>
    <td> SHI 207 </td>
    <td> Politik Internasional</td>
    <td> 3 </td>
  </tr>
  <tr>
    <td> 5 </td>
    <td> SHI 209</td>
    <td> Analisis Kebijakan Luar Negeri</td>
    <td> 3 </td>
  </tr>
  <tr>
    <td> 6 </td>
    <td> SHI 211</td>
    <td> Hukum Internasional</td>
    <td> 3 </td>
  </tr>
   <tr>
    <td> 7 </td>
    <td> SHI 213 </td>
    <td> Intitusi Internasional </td>
    <td> 3 </td>
  </tr>
  <tr>
    <td> 8 </td>
    <td> SHI 215 </td>
    <td> Diplomasi </td>
    <td> 3 </td>
  </tr>
  <tr>
    <th></th>
    <th></th>
    <th>Jumlah</th>
    <th>24</th>
  </tr>

  <tr>
    <th>Semester 4</th>
  </tr>
  <tr>
    <th>No</th>
    <th>Kode MK</th>
    <th>Mata Kuliah</th>
    <th>SKS</th>
  </tr>
  <tr>
    <td> 1 </td>
    <td> SHI 202</td>
    <td> Bahasa Indonesia untuk Penulisan Karya Ilmiah</td>
    <td> 3 </td>
  </tr>
  <tr>
    <td> 2 </td>
    <td> SHI 204 </td>
    <td> Hubungan dan Kerja Sama Luar Negeri oleh Pemerintah Daerah</td>
    <td> 3 </td>
  </tr>
  <tr>
    <td> 3 </td>
    <td> SHI 206 </td>
    <td> Kebijakan Luar Negeri dan Diplomasi Indonesia</td>
    <td> 3 </td>
  </tr>
  <tr>
    <td> 4 </td>
    <td> SHI 208 </td>
    <td> Media dan Jaringan Informasi Global</td>
    <td> 3 </td>
  </tr>
  <tr>
    <td> 5 </td>
    <td> SHI 210 </td>
    <td> Dinamika ASEAN </td>
    <td> 3 </td>
  </tr>
  <tr>
    <td> 6 </td>
    <td> SHI 212 </td>
    <td> Teori Keamanan Internasional </td>
    <td> 3 </td>
  </tr>
  <tr>
    <td> 7 </td>
    <td> SHI 214 </td>
    <td> Teori Ekonomi Politik Internasional </td>
    <td> 3 </td>
  </tr>
  <tr>
    <th></th>
    <th></th>
    <th>Jumlah</th>
    <th>21</th>
  </tr>

  <tr>
    <th>Semester 5</th>
  </tr>
  <tr>
    <th>No</th>
    <th>Kode MK</th>
    <th>Mata Kuliah</th>
    <th>SKS</th>
  </tr>
  <tr>
  <th></th>
    <th>MK Wajib</th>
    <th></th>
    <th></th>
  </tr>
  <tr>
    <td> 1 </td>
    <td> SHI 301 </td>
    <td> Peran Internasional Amerika Serikat</td>
    <td> 3 </td>
  </tr>
  <tr>
    <td> 2 </td>
    <td> SHI 303 </td>
    <td> Dinamika Kawasan Asia Timur</td>
    <td> 3 </td>
  </tr>
  <tr>
  <th></th>
    <th>Kekhususan Keamanan Internasional</th>
    <th></th>
    <th></th>
  </tr>
  <tr>
    <td> 3 </td>
    <td> SIK 301 </td>
    <td> Dinamika Persenjataan</td>
    <td> 3 </td>
  </tr>
  <tr>
    <td> 4 </td>
    <td> SIK 303 </td>
    <td> Pengaturan Keamanan Internasional</td>
    <td> 3 </td>
  </tr>
  <tr>
    <td> 5 </td>
    <td> SIK 305 </td>
    <td> Perdamaian dan Resolusi Konflik </td>
    <td> 3 </td>
  </tr>
  <tr>
  <th></th>
    <th>Kekhususan Ekonomi Politik Internasional</th>
    <th></th>
    <th></th>
  </tr>
  <tr>
    <td> 3 </td>
    <td> SIE 301 </td>
    <td> Pembangunan Internasional </td>
    <td> 3 </td>
  </tr>
   <tr>
    <td> 4 </td>
    <td> SIE 303 </td>
    <td> Perusahaan Multinasional </td>
    <td> 3 </td>
  </tr>
  <tr>
    <td> 5 </td>
    <td> SIE 305 </td>
    <td> Globalisasi dan Regionalisme dalam Ekonomi Politik Internasional </td>
    <td> 3 </td>
  </tr>
  <tr>
  <th></th>
    <th>MK Pilihan (Pilih 2 Mata Kuliah)</th>
    <th></th>
    <th></th>
  </tr>
  <tr>
    <td> 6 </td>
    <td> SKP 301 </td>
    <td> Dinamika Kawasan Timur Tengah dan Afrika </td>
    <td> 3 </td>
  </tr>
   <tr>
    <td> 7 </td>
    <td> SKP 303 </td>
    <td> Dinamika Kawasan Asia Selatan dan Asia Tengah </td>
    <td> 3 </td>
  </tr>
  <tr>
    <td> 8 </td>
    <td> SKP 305 </td>
    <td> Dinamika Kawasan Eropa </td>
    <td> 3 </td>
  </tr>
   
  <tr>
    <th></th>
    <th></th>
    <th>Jumlah</th>
    <th>21</th>
  </tr>

  <tr>
    <th>Semester 6</th>
  </tr>
 <tr>
    <th>No</th>
    <th>Kode MK</th>
    <th>Mata Kuliah</th>
    <th>SKS</th>
  </tr>
  <tr>
  <th></th>
    <th>MK Wajib</th>
    <th></th>
    <th></th>
  </tr>
  <tr>
    <td> 1 </td>
    <td> SHI 302 </td>
    <td> Peran Internasional China</td>
    <td> 3 </td>
  </tr>
  <tr>
    <td> 2 </td>
    <td> SHI 304 </td>
    <td> Metode Penelitian HI</td>
    <td> 3 </td>
  </tr>
  <tr>
  <th></th>
    <th>Kekhususan Keamanan Internasional</th>
    <th></th>
    <th></th>
  </tr>
  <tr>
    <td> 3 </td>
    <td> SIK 302 </td>
    <td> Keamanan Non-Tradisional</td>
    <td> 3 </td>
  </tr>
  <tr>
    <td> 4 </td>
    <td> SIK 304 </td>
    <td> Strategi Pertahanan Indonesia</td>
    <td> 3 </td>
  </tr>
  <tr>
    <td> 5 </td>
    <td> SIK 306 </td>
    <td> Diplomasi Pertahanan </td>
    <td> 3 </td>
  </tr>
  <tr>
  <th></th>
    <th>Kekhususan Ekonomi Politik Internasional</th>
    <th></th>
    <th></th>
  </tr>
  <tr>
    <td> 3 </td>
    <td> SIE 302 </td>
    <td> Politik Keuangan Internasional </td>
    <td> 3 </td>
  </tr>
   <tr>
    <td> 4 </td>
    <td> SIE 304 </td>
    <td> Politik Perdagangan Internasional </td>
    <td> 3 </td>
  </tr>
  <tr>
    <td> 5 </td>
    <td> SIE 306 </td>
    <td> Diplomasi Ekonomi </td>
    <td> 3 </td>
  </tr>
  <tr>
  <th></th>
    <th>MK Pilihan (Pilih 2 Mata Kuliah)</th>
    <th></th>
    <th></th>
  </tr>
  <tr>
    <td> 6 </td>
    <td> SKP 302 </td>
    <td> Dinamika Kawasan Amerika </td>
    <td> 3 </td>
  </tr>
   <tr>
    <td> 7 </td>
    <td> SIKP 304 </td>
    <td> Dinamika Kawasan Pasifik Selatan </td>
    <td> 3 </td>
  </tr>
  <tr>
    <td> 8 </td>
    <td> SIKP 306 </td>
    <td> Diplomasi Budaya </td>
    <td> 3 </td>
  </tr>
   
  <tr>
    <th></th>
    <th></th>
    <th>Jumlah</th>
    <th>21</th>
  </tr>

  <tr>
    <th>Semester 7</th>
  </tr>
  <tr>
    <th>No</th>
    <th>Kode MK</th>
    <th>Mata Kuliah</th>
    <th>SKS</th>
  </tr>
  
  <tr>
    <td> 1 </td>
    <td> SHI 401</td>
    <td> Seminar Pilihan Masalah </td>
    <td> 3 </td>
  </tr>
   <tr>
    <td> 2 </td>
    <td> SHI 403</td>
    <td> Isu-isu Aktual dalam HI</td>
    <td> 3</td>
  </tr>
   <tr>
    <td> 3</td>
    <td>SHI 405 </td>
    <td> Magang</td>
    <td>  3</td>
  </tr>
  
  <tr>
    <th></th>
    <th></th>
    <th>Jumlah</th>
    <th>9</th>
  </tr>
  <tr>

    <th>Semester 8</th>
  </tr>
  <tr>
    <th>No</th>
    <th>Kode MK</th>
    <th>Mata Kuliah</th>
    <th>SKS</th>
  </tr>
  <tr>
    <td> 1 </td>
    <td> SHI 402 </td>
    <td> Praktek Diplomasi</td>
    <td> 3 </td>
  </tr>
  <tr>
    <td> 2 </td>
    <td> SAN 500 </td>
    <td> Skripsi </td>
    <td> 6 </td>
  </tr>
 
    <th></th>
    <th></th>
    <th>Jumlah</th>
    <th>17</th>
  </tr>

</table>
</div>

</div>
</div>

</div>
</div>

@endsection


@section('scripts2')
<script type="text/javascript">
  function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
@endsection