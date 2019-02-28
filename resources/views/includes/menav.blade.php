{{--<div class="row" style="height: 30px; background-color:#ffff;; ">
  </div>
--}}
  

<div class="header">
  <div class="container">
    <div class="col-md-6"  >
      <img src="{{ asset('/img/loghead.png')}}" style="width:100%; height:auto;"/>
    </div>
    <div class="col-md-2 pull-right" >
          <ul class="subscribe-stuff-up">
          <li><a title="Facebook" href="https://www.facebook.com/fisipmoestopo" rel="nofollow">
          <i class="fa fa-facebook" style="font-size:18px; "></i>
          </a>
          </li>
          <li><a title="Instagram" href="https://www.instagram.com/fisipmoestopo" rel="nofollow">
          <i class="fa fa-instagram" style="font-size:18px "></i>
          </a>
          </li>
          <li>
          <a title="Twitter" href="https://twitter.com/fisip_moestopo" rel="nofollow">
          <i class="fa fa-twitter" style="font-size:18px "></i>
          </a>
          </li>
          <li>
          <a title="Youtube" href="https://www.youtube.com/channel/UCgqtiBBfdGMykz5zJA2EFKg" rel="nofollow">
          <i class="fa fa-youtube" style="font-size:18px "></i>
          </a>
          </li>
          <li><a title="E-mail this story to a friend!" href="moestopofisip@gmail.com" rel="nofollow">
          <i class="fa fa-google-plus" style="font-size:18px "></i>
          </a>
          </li>
          </ul>
  </div>
  </div>
</div>

<div id="navbar">
<!-- <nav class="navbar navbar-inverse"> -->

<div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <div class="brand">
        {{--
      <a class="navbar-brand" href="{{ url('/') }}"><img src="{{ asset('/img/logo.png')}}" style="max-width:100px; margin-top: -9px; height: 40px;">
      </a>
     
      <a class="navbar-brand" href="{{ url('/') }}"><img src="{{ asset('/img/textt.png')}}" style="max-width:100%; margin-top: -13px; height: 47px;">
      </a>
       
       <div class="col-md-12">
        <img src="{{ asset('/img/logo.png')}}" style="padding-top: 5px; height: 40px;">
       </div>
      --}}
      </div>
     
      
      
       
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav" style="margin: 0 auto;">
        <li ><a href="{{ url('/') }}">
           <i class="fa fa-home" style="font-size:18px; "></i>
          BERANDA <span class="sr-only">(current)</span></a></li>
        
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
              <i class="fa fa-building" style="font-size:16px; "></i>
            PROFIL<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="{{url('/sambutan')}}">Sambutan</a></li>
            <li><a href="{{url('/visimisi')}}">Visi dan Misi</a></li>
            <li><a href="{{url('/organisasi')}}">Organisasi</a></li>
            <li><a href="{{url('/pimpinan')}}">Pimpinan</a></li>
            {{--<li><a href="#">SDM</a></li>--}}
          </ul>
        </li>

         <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
             <i class="fa fa-list" style="font-size:16px; "></i>
            PROGRAM STUDI<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="{{url('/adminegara')}}">Administrasi Publik</a></li>
            <li><a href="{{url('/hubinter')}}">Hub Internasional</a></li>
          </ul>
        </li>


         <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
             <i class="fa fa-graduation-cap" style="font-size:16px; "></i>
            PENDIDIKAN<span class="caret"></span></a>
          <ul class="dropdown-menu">
           {{-- <li><a href="#">Pedoman Pendidikan </a></li>--}}
            <li><a href="https://dosen.moestopo.ac.id/">Dosen Online</a></li>
            <li><a href="https://mahasiswa.moestopo.ac.id/">Mahasiswa Online</a></li>
             <li><a href="{{url('/kalender')}}">Kalender Akademik</a></li>
             <!-- <li><a href="#">Jadwal Kuliah</a></li> -->
            <!--  <li><a href="#">Status & Sertifikasi Akreditasi</a></li> -->
          </ul>
        </li>


        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-file" style="font-size:16px; "></i>
             PUBLIKASI <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="{{url('/jurnal')}}">Jurnal</a></li>
            <li><a href="{{url('/buku')}}">Buku</a></li>
            {{--
            <li><a href="{{url('/pdosen')}}">Publikasi Dosen</a></li>
            <li><a href="#">Publikasi Mahasiswa</a></li>
            --}}
          </ul>
        </li>
        <li><a href="{{url('/kontak')}}">
          <i class="fa fa-map-marker" style="font-size:18px; "></i>
         KONTAK</a></li>

      </ul><!-- closenavleft -->
     {{--
      <ul class="nav navbar-nav navbar-right">

       <form class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Cari...">
        </div>
        <button type="submit" class="btn btn-default">Cari</button>
      </form>
      </ul>
      --}}
      
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
  <!-- </nav> -->
</div>