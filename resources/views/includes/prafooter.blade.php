<div id="extra-wrap">
	<div id="extra" class="clearfix">

	    

	    <div class="col-md-4">

		    <h3>Kontak info</h3>
        <img class="img-circle" src="{{ asset('/img/logo.png')}}" alt="Generic placeholder image" style="width: 80px; height: 80px;">

		    <p>
		    <strong>Phone: </strong>+1234567<br/>
		    <strong>Fax: </strong>+123456789
		    </p>

		    <p><strong>Alamat: </strong>Jl Hanglekir I No 8, Jakarta </p>
            <p><strong>E-mail: </strong>moestopofisip@gmail.com</p>
		    <p>info lebih lanjut <a href="moestopofisip@gmail.com">kontak kami</a></p>

            <h3>Sosial Media</h3>


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

	    <div class="col-md-4">

   	        {{--<h3>Artikel</h3>--}}

		    <div class="footer-list">
			    <ul>
				@php
					$dt=[];
				
				@endphp
			    @foreach($dt as $item)
				    <li><a>{{ $item->judul}}</a></li>
				@endforeach
			    </ul>
		    </div>

            <h3>Link Tautan</h3>

		    <div class="footer-list">
			    <ul>
				    <li><a href="https://moestopo.ac.id/">Universitas Prof.Dr.Moestopo</a></li>
				    <li><a href="https://dosen.moestopo.ac.id/">Anjungan Dosen</a></li>
				    <li><a href="https://mahasiswa.moestopo.ac.id/">Anjungan Mahasiswa</a></li>
				    <li><a href="index.html">Site Map</a></li>
			    </ul>
		    </div>

	    </div>

       

        

<!-- /extra -->
				
			</div>
	</div>