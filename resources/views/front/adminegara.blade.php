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
    <li class="active">Administrasi Publik</li>
  </ul>
<div class="container" style="margin-top: 20px">

  <div class="page-header">
    <h3>ADMINISTRASI PUBLIK</h3>
  </div>



  <div class="row">
    <div class="col-md-12 wow slideInUp"  data-wow-duration="3s">
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

<h3 class="sub-header">KURIKULUM PROGRAM STUDI ADMINISTRASI PUBLIK</h3>


<div class="table-responsive wow slideInUp"  data-wow-duration="2s"> 
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
    <td> SAN 101 </td>
    <td> Pendidikan Agama</td>
    <td> 2 </td>
  </tr>
  <tr>
    <td> 2 </td>
    <td> SAN 103 </td>
    <td> Pendidikan Kewarganegaraan</td>
    <td> 2 </td>
  </tr>
  <tr>
    <td> 3 </td>
    <td> SAN 105 </td>
    <td> Ilmu Budaya Dasar</td>
    <td> 2 </td>
  </tr>
  <tr>
    <td> 4 </td>
    <td> SAN 107 </td>
    <td> Pendidikan Pancasila</td>
    <td> 2 </td>
  </tr>
  <tr>
    <td> 5 </td>
    <td> SAN 109 </td>
    <td> Bahasa Indonesia </td>
    <td> 2 </td>
  </tr>
  <tr>
    <td> 6 </td>
    <td> SAN 111 </td>
    <td> Ilmu Alamiah Dasar </td>
    <td> 2 </td>
  </tr>
   <tr>
    <td> 7 </td>
    <td> SAN 113 </td>
    <td> Pengantar Sosiologi </td>
    <td> 3 </td>
  </tr>
   <tr>
    <td> 8 </td>
    <td> SAN 115 </td>
    <td> Pengantar Ilmu Politik </td>
    <td> 3 </td>
  </tr>
  <tr>
    <th></th>
    <th></th>
    <th>Jumlah</th>
    <th>18</th>
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
    <td> SAN 102 </td>
    <td> Pengantar Ilmu Ekonomi</td>
    <td> 3 </td>
  </tr>
  <tr>
    <td> 2 </td>
    <td> SAN 104 </td>
    <td> Pengantar Filsafat</td>
    <td> 3 </td>
  </tr>
  <tr>
    <td> 3 </td>
    <td> SAN 106 </td>
    <td> Pengantar Ilmu Administrasi Negara</td>
    <td> 3 </td>
  </tr>
  <tr>
    <td> 4 </td>
    <td> SAN 108 </td>
    <td> Pengantar Ilmu Hukum</td>
    <td> 3 </td>
  </tr>

  <tr>
    <td> 5 </td>
    <td> SAN 110 </td>
    <td> Sistem Ekonomi Indonesia </td>
    <td> 3 </td>
  </tr>
  <tr>
    <td> 6 </td>
    <td> SAN 112 </td>
    <td> Sistem Politik Indonesia </td>
    <td> 3 </td>
  </tr>
   <tr>
    <td> 7 </td>
    <td> SAN 114 </td>
    <td> Teori Organisasi </td>
    <td> 3 </td>
    </tr>
  <tr>
    <th></th>
    <th></th>
    <th>Jumlah</th>
    <th>21</th>
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
    <td> SAN 201</td>
    <td> Hubungan Masyarakat</td>
    <td> 3 </td>
  </tr>
  <tr>
    <td> 2 </td>
    <td> SAN 203 </td>
    <td> Antropologi Budaya</td>
    <td> 3 </td>
  </tr>
  <tr>
    <td> 3 </td>
    <td> SAN 205 </td>
    <td> Bahasa Inggris </td>
    <td> 2 </td>
  </tr>
  <tr>
    <td> 4 </td>
    <td> SAN 207 </td>
    <td> Manajemen Perkantoran</td>
    <td> 3 </td>
  </tr>
  <tr>
    <td> 5 </td>
    <td> SAN 209</td>
    <td> Dasar-Dasar Perpajakan</td>
    <td> 3 </td>
  </tr>
  <tr>
    <td> 6 </td>
    <td> SAN 211</td>
    <td> Birokrasi</td>
    <td> 3 </td>
  </tr>
   <tr>
    <td> 7 </td>
    <td> SAN 213 </td>
    <td> Asas-Asas Manajemen </td>
    <td> 3 </td>
  </tr>
  <tr>
    <th></th>
    <th></th>
    <th>Jumlah</th>
    <th>19</th>
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
    <td> SAN 202</td>
    <td> Perencanaan</td>
    <td> 3 </td>
  </tr>
  <tr>
    <td> 2 </td>
    <td> SAN 204 </td>
    <td> Administrasi Pembangunan</td>
    <td> 3 </td>
  </tr>
  <tr>
    <td> 3 </td>
    <td> SAN 206 </td>
    <td> Metode Penelitian Administrasi</td>
    <td> 3 </td>
  </tr>
  <tr>
    <td> 4 </td>
    <td> SAN 208 </td>
    <td> Manajemen Sumber Daya Manusia</td>
    <td> 3 </td>
  </tr>
  <tr>
    <td> 5 </td>
    <td> SAN 210 </td>
    <td> Sistem Hukum Indonesia </td>
    <td> 2 </td>
  </tr>
  <tr>
    <td> 6 </td>
    <td> SAN 212 </td>
    <td> Kepemimpinan </td>
    <td> 3 </td>
  </tr>
  <tr>
    <th></th>
    <th></th>
    <th>Jumlah</th>
    <th>18</th>
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
    <td> 1 </td>
    <td> SAN 301 </td>
    <td> Administrasi Pertanahan</td>
    <td> 2 </td>
  </tr>
  <tr>
    <td> 2 </td>
    <td> SAN 303 </td>
    <td> Kapita Selekta Administrasi</td>
    <td> 3 </td>
  </tr>
  <tr>
    <td> 3 </td>
    <td> SAN 305 </td>
    <td> Manajemen Materiil</td>
    <td> 3 </td>
  </tr>
  <tr>
    <td> 4 </td>
    <td> SAN 307 </td>
    <td> Teori dan Aplikasi Komputer</td>
    <td> 3 </td>
  </tr>
  <tr>
    <td> 5 </td>
    <td> SAN 309 </td>
    <td> Pengantar Statistik Sosial </td>
    <td> 3 </td>
  </tr>
  <tr>
    <td> 6 </td>
    <td> SAN 311 </td>
    <td> Sistem Administrasi Negara </td>
    <td> 3 </td>
  </tr>
   <tr>
    <td> 7 </td>
    <td> SAN 313 </td>
    <td> Kewirausahaan </td>
    <td> 2 </td>
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
    <td> SAN 302 </td>
    <td> Administrasi Keuangan</td>
    <td> 3 </td>
  </tr>
  <tr>
    <td> 2 </td>
    <td> SAN 304 </td>
    <td> Pajak dan Retribusi Daerah</td>
    <td> 2 </td>
  </tr>
  <tr>
    <td> 3 </td>
    <td> SAN 306 </td>
    <td> Hukum Administrasi Negara</td>
    <td> 3 </td>
  </tr>
  <tr>
    <td> 4 </td>
    <td> SAN 308 </td>
    <td> Sistem Informasi Manajemen</td>
    <td> 3 </td>
  </tr>
  <tr>
    <td> 5 </td>
    <td> SAN 310 </td>
    <td> Manajemen Publik </td>
    <td> 3 </td>
  </tr>
  <tr>
  <th></th>
    <th>MK Pilihan I</th>
    <th></th>
    <th></th>
  </tr>
  <tr>
    <td> 6 </td>
    <td> SPP 302 </td>
    <td> Administrasi dan Masalah-Masalah Publik </td>
    <td> 2 </td>
  </tr>
   <tr>
    <td>  </td>
    <td> SAP 302</td>
    <td> Perencanaan Pendidikan </td>
    <td> </td>
  </tr>
   <tr>
    <td> </td>
    <td>SPB 302 </td>
    <td> Perencanaan Pembangunan</td>
    <td>  </td>
  </tr>
  <tr>
  <th></th>
    <th>MK Pilihan II</th>
    <th></th>
    <th></th>
  </tr>
  <tr>
    <td> 7 </td>
    <td> SPP 304 </td>
    <td> Akuntansi Keuangan Publik </td>
    <td> 3 </td>
  </tr>
   <tr>
    <td>  </td>
    <td> SAP 304</td>
    <td>Manajemen Keuangan Pendidikan </td>
    <td> </td>
  </tr>
   <tr>
    <td> </td>
    <td>SPB 304 </td>
    <td> Pembiayaan Pembangunan</td>
    <td>  </td>
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
  <th></th>
    <th>MK Pilihan III</th>
    <th></th>
    <th></th>
  </tr>
  <tr>
    <td> 1 </td>
    <td> SAN 401</td>
    <td> Pengembangan Organisasi </td>
    <td> 3 </td>
  </tr>
   <tr>
    <td> 2 </td>
    <td> SAN 403</td>
    <td> Manajemen Strategik</td>
    <td> 3</td>
  </tr>
   <tr>
    <td> 3</td>
    <td>SAN 405 </td>
    <td> Magang</td>
    <td>  3</td>
  </tr>
  <tr>
    <td> 4</td>
    <td>SAN 407 </td>
    <td> Etika Administrasi</td>
    <td>  3</td>
  </tr>
  <tr>
  <th></th>
    <th>MK Pilihan IV</th>
    <th></th>
    <th></th>
  </tr>
  <tr>
    <td> 5 </td>
    <td> SPP 401 </td>
    <td> Manajemen Transportasi </td>
    <td> 3 </td>
  </tr>
   <tr>
    <td>  </td>
    <td> SAP 401</td>
    <td>Manajemen Sarana dan Prasarana Pendidikan </td>
    <td> </td>
  </tr>
   <tr>
    <td> </td>
    <td>SPB 401 </td>
    <td> Pembangunan Kapasitas Kelembagaan Sektor Publik</td>
    <td>  </td>
  </tr>
  <tr>
  <th></th>
    <th>MK Pilihan V</th>
    <th></th>
    <th></th>
  </tr>
  <tr>
    <td> 6 </td>
    <td> SPP 403 </td>
    <td> Pelayanan Prima </td>
    <td> 3 </td>
  </tr>
   <tr>
    <td>  </td>
    <td> SAP 403</td>
    <td>Supervisi Pendidikan </td>
    <td> </td>
  </tr>
   <tr>
    <td> </td>
    <td>SPB 403 </td>
    <td> Kebijakan Pembangunan Wilayah dan Kota</td>
    <td>  </td>
  </tr>
  <tr>
    <th></th>
    <th></th>
    <th>Jumlah</th>
    <th>18</th>
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
    <td> SAN 402 </td>
    <td> Pengambilan Keputusan</td>
    <td> 3 </td>
  </tr>
  <tr>
    <td> 2 </td>
    <td> SAN 404 </td>
    <td> Kebijakan Publik</td>
    <td> 3 </td>
  </tr>
  <tr>
    <td> 3 </td>
    <td> SAN 406 </td>
    <td> Administrasi Kependudukan dan Lingkungan Hidup</td>
    <td> 2 </td>
  </tr>
  <tr>
    <td> 4 </td>
    <td> SAN 408 </td>
    <td> Sistem Sosial Budaya Indonesia</td>
    <td> 3 </td>
  </tr>
  <tr>
    <td> 5 </td>
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