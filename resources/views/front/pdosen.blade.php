@extends('layouts.web')
@section('content')
	<ul class="breadcrumb">
		<li>Home</li>
		<li class="active">Publikasi Dosen</li>
	</ul>

	<div class="container">
		
		<div class="row">
		@foreach($dosen as $item)
			 <div class="col-xs-2">
			    <div class="thumbnail">
			      <img src="{{ url('upimg/dosimg') }}/{{ $item->img }}" alt="...">
			      <div class="caption">
			        <h3>{{$item->nama}}</h3>
			        <p></p>
			        <p><a href="{{url('/jurnaldosen/'.$item->id)}}" class="btn btn-default" role="button">Jurnal</a> <a href="{{url('/bukudosen/'.$item->id)}}" class="btn btn-default" role="button">Buku</a></p>
			      </div>
			    </div>
			 </div>
			 @endforeach
		</div>
		
	</div>
@endsection