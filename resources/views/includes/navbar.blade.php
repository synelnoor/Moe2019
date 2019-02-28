<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{ url('/') }}"><img src="{{ asset('/img/logo.png')}}" style="max-width:100px; margin-top: -9px; height: 40px;">
      </a>
      <a class="navbar-brand" href="{{ url('/') }}"><img src="{{ asset('/img/textt.png')}}" style="max-width:100%; margin-top: -13px; height: 47px;">
      </a>
       
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li ><a href="{{ url('/') }}">Beranda <span class="sr-only">(current)</span></a></li>
        
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Profil<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="{{url('/sambutan')}}">Sambutan</a></li>
            <li><a href="{{url('/visimisi')}}">Visi dan Misi</a></li>
            <li><a href="{{url('/organisasi')}}">Organisasi</a></li>
            <li><a href="{{url('/pimpinan')}}">Pimpinan</a></li>
            <li><a href="#">SDM</a></li>
          </ul>
        </li>

         <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Program Studi<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="{{url('/adminegara')}}">Administrasi Negara</a></li>
            <li><a href="{{url('/hubinter')}}">Hub Internasional</a></li>
          </ul>
        </li>


         <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pendidikan<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Pedoman Pendidikan </a></li>
            <li><a href="https://dosen.moestopo.ac.id/">Dosen Online</a></li>
            <li><a href="https://mahasiswa.moestopo.ac.id/">Mahasiswa Online</a></li>
             <li><a href="{{url('/kalender')}}">Kalender Akademik</a></li>
             <!-- <li><a href="#">Jadwal Kuliah</a></li> -->
            <!--  <li><a href="#">Status & Sertifikasi Akreditasi</a></li> -->
          </ul>
        </li>


        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Publikasi <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="{{url('/jurnal')}}">Jurnal</a></li>
            <li><a href="{{url('/buku')}}">Buku</a></li>
            <li><a href="{{url('/pdosen')}}">Publikasi Dosen</a></li>
            <li><a href="#">Publikasi Mahasiswa</a></li>
            
          </ul>
        </li>
        <li><a href="{{url('/kontak')}}">Kontak</a></li>

      </ul><!-- closenavleft -->
     
      <ul class="nav navbar-nav navbar-right">
<!--
       <form class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Cari...">
        </div>
        <button type="submit" class="btn btn-default">Cari</button>
      </form>

      -->
        
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>