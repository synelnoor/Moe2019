@extends('layouts.web')

@section('content')

      <div class="container">

        <h3>Kontak info</h3>
        <img class="img-circle" src="{{asset('/img/logo.png')}}" alt="Generic placeholder image" style="width: 80px; height: 80px;">

        <p>
        <strong>Phone: </strong>+1234567<br/>
        <strong>Fax: </strong>+123456789
        </p>

        <p><strong>Alamat: </strong>Jl Hanglekir I No 8, Jakarta </p>
            <p><strong>E-mail: </strong>moestopofisip@gmail.com.com</p>
        <p>info lebih lanjut <a href="moestopofisip@gmail.com">kontak kami</a></p>

            <h2>Sosial Media</h2>

            <ul class="subscribe-stuff">
            <li><a title="Facebook" href="https://www.facebook.com/fisipmoestopo" rel="nofollow">
            {{--<img alt="Facebook" title="Facebook" src=" {{ asset('/img/sosial_f.png')}}" />--}}
            <i class="fa fa-facebook" style="font-size:24px"></i>
            </a>
            </li>
            <li><a title="Instagram" href="https://www.instagram.com/fisipmoestopo" rel="nofollow">
            {{--<img alt="Instagram" title="Instagram" src="{{ asset('/img/sosial_in.png')}}" />--}}
            <i class="fa fa-instagram" style="font-size:24px"></i>
            </a>
            </li>
            <li>
            <a title="Twitter" href="https://twitter.com/fisip_moestopo" rel="nofollow">
            {{--<img alt="Twitter" title="Twitter" src="{{ asset('/img/sosial_t.png')}}" />--}}
            <i class="fa fa-twitter" style="font-size:24px"></i>
            </a>
            </li>
            <li>
            <a title="Youtube" href="https://www.youtube.com/channel/UCgqtiBBfdGMykz5zJA2EFKg" rel="nofollow">
            {{--<img alt="Youtube" title="Youtube" src="{{ asset('/img/sosial_y.png')}}" />--}}
            <i class="fa fa-youtube" style="font-size:24px"></i>
            </a>
            </li>
            <li><a title="E-mail this story to a friend!" href="moestopofisip@gmail.com" rel="nofollow">
            <i class="fa fa-google-plus" style="font-size:24px"></i>
            </a>
            </li>
            </ul>

          

      </div>

    
  <div class="container">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.2630615229386!2d106.79402421431348!3d-6.229008295490974!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f04939be17b7%3A0x167e696bf5e3629e!2sUniversitas+Prof.+DR.+Moestopo!5e0!3m2!1sid!2sid!4v1474366122737" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
  </div> 
 
        
   

@endsection