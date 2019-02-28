<div id="carousel-example-generic " class="carousel" data-ride="carousel"  
style=" background-color: #222211;margin-top: 0; margin-bottom: 0px margin-left:-15px; margin-right: -15px;">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="dot"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1" class="dot"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"
    class="dot"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
 
  @foreach($banner as $item)               
    
   {{--dd($item->image)--}}
    <div class="item fade">
      <img src="{{$item->image}}" style="width: 100%; height: 500px;" >
      <div class="carousel-caption">
        ...
      </div>
    </div>
     @endforeach


  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" ></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" ></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<div class="container">
   <div class="row" >
     
            <div class="col-md-4 box-ar wow rollIn"  data-wow-duration="2s" >
              <a href="https://moestopo.ac.id/">
              <div class="col-md-12 box-in">
                <i class="fa fa-university" style="font-size: 90px"></i>
                <p>UNIVERSITAS</p>
              </div>
              </a>
              
            </div>

            <div class="col-md-4 box-ar wow slideInUp"  data-wow-duration="2s" >
              <a href="https://elearning.moestopo.ac.id/">
               <div class="col-md-12 box-in">
                  <i class="fa fa-graduation-cap" style="font-size: 90px"></i>
                  <p>PENDIDIKAN</p>
               </div>
             </a>
              
            </div>

            <div class="col-md-4 box-ar wow lightSpeedIn"  data-wow-duration="2s" >
              <a href="{{url('/pimpinan')}}">
               <div class="col-md-12 box-in">
                 <i class="fa fa-users" style="font-size: 90px"></i>
                 <p>PROFIL</p>
               </div>
              </a>
              
            </div>
      </div>
  </div>

          {{--
             <div class="artikel">
          @foreach($data as $item)  
                    
            <div class="col-lg-4 wow slideInUp"  data-wow-duration="2s" style="margin-left: auto; margin-right: auto;">
                 
                  <img src="{{ $item->file }}" class="img-circle" alt="Generic placeholder image" style="width: 140px; height: 140px;">
                  <h2>{{$item->judul}}</h2>
                <p> {!! str_limit($item->isi,$limit = 100, $end="...")!!}</p>
                
                <p><a href="{{url('/artikeldetail/'.$item->id)}}" class="btn btn-default">Selengkapnya >></a></p>
            </div>
           @endforeach
           
        </div>
        --}}
      


  <div class="container-fluid" style="background-color:  #ff8604;">
    <div class="row" >
    <div class="container ">

          <div class="col-md-3 wow slideInUp"  data-wow-duration="3s" style="padding-right: 0px;
    padding-left: 0px; text-align: center;">
            
            {{--  <img src="{{asset('/img/banner.jpg')}}" style="height: 300px; width: 100%;">--}}
            <a href="http://pmb.moestopo.ac.id/">
            <div class="col-md-3 box-reg " >
              <p style="color:#ff8604 ; font-size: 40px; font-family: 'Molengo', Georgia, Times, serif;" >PENDAFTARAN MAHASISWA BARU<p>
                <i class="fa fa-edit" style="color: #ff8604 ; font-size: 90px; "></i>
            </div>
            
            </a>         
          </div>


          <div class="col-md-6 wow slideInUp"  data-wow-duration="4s"style="padding-right: 0px;
    padding-left: 0px;">
            <iframe width="100%" height="300" src="https://www.youtube.com/embed/D-PgxfagftY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
          


          <div class="col-md-3 wow slideInUp"  data-wow-duration="5s" style="padding-right: 0px;
    padding-left: 0px;">   
             <a class="twitter-timeline" data-width="100%" data-height="300" href="https://twitter.com/fisip_moestopo">Tweets by fisip_moestopo</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
          </div>
      
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-md-8"  style="margin-top: 10px;">
        
        <h4>  <i class="fa fa-file" style="font-size: 20px"></i> BERITA & ARTIKEL</h4>

        @foreach($data as $item)
        <div class="row artik wow rollIn">
          <div class="col-md-4">
            <img src="{{ $item->file }}"  alt="Generic placeholder image" style="width: 100%;height: 100px;">
          </div>      
          <div class="col-md-8">
            <h3>{{$item->judul}}</h3>
                <p> {!! str_limit($item->isi,$limit = 150, $end="...")!!}</p>
                <p>
                  <a href="{{url('/artikeldetail/'.$item->id)}}" class="btn btn-default">
                    Selengkapnya >>   
                  </a>
                </p>
          </div>
        </div>  
          
           @endforeach
      </div>
      <div class="col-md-4" style="padding: 10px;">
        
        <h4>  <i class="fa fa-file" style="font-size: 20px"></i>EVENT</h4>

                         {{--  

                        <div class="sonar-catagories-widget-area mb-50">
                            
                            <ul class="catagories-menu">
                              @foreach($event as $it)
                              <li><a href="#">{{$it->tgl->format('d/m/Y')}}

                              </a></li>
                              
                            </ul>
                        </div>
                        --}}
                        @foreach($event as $it)
                        <div class="row row-striped" style="padding: 10px;background-color: #333; ">
                       <div class="col-md-3" style="height: auto;">
                          <h1 class="display-4"><span class="badge badge-secondary">{{$it->tgl->format('d')}}</span></h1>
                          <h2>{{$it->tgl->format('F')}}</h2>
                        </div>
                        <div class="col-md-8" style="color: #fff; ">
                          <h3 class="text-uppercase"><strong>{{$it->nama}}</strong></h3>
                          <ul class="list-inline">
                              <li class="list-inline-item"><i class="fa fa-calendar-o" aria-hidden="true"></i> {{$it->tgl->format('l')}}</li>
                          </ul>
                          <p>{{$it->desc}}</p>
                        </div>
                      </div>
                      @endforeach
                    <!---->
      </div>
    </div>
  </div>




  @section('scripts2')
  <script type="text/javascript">
            var slideIndex = 0;
            showSlides();

            function showSlides() {
                var i;
                var slides = document.getElementsByClassName("item");
                var dots = document.getElementsByClassName("dot");
                
                for (i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";  
                }
                slideIndex++;
                if (slideIndex > slides.length) {slideIndex = 1}    
                for (i = 0; i < dots.length; i++) {
                    dots[i].className = dots[i].className.replace(" active", "");
                }
                slides[slideIndex-1].style.display = "block";  
                dots[slideIndex-1].className += " active";
                setTimeout(showSlides, 5000); // Change image every 2 seconds
            }


    </script> 
  @endsection