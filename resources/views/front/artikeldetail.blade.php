@extends('layouts.web')

@section('content')

<ul class="breadcrumb">
		<li>Beranda</li>
		<li class="active">Artikel detail</li>
	</ul>

	<div class="container">
		<div class="row">

			<div class="well wow slideInUp"  data-wow-duration="2s">
				
				<h4>{{$artikel->judul }}</h4>
					<p>			
						 <img src="{{ $artikel->file }}" class="thumbnail" width="100%">
							
						{!! $artikel->isi !!}
					</p>
	
			</div>
		</div>
	</div>

@endsection