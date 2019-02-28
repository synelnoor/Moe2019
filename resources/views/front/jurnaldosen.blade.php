@extends('layouts.web')
@section('content')
	
	<ul class="breadcrumb">
		<li>Home</li>
		<li class="active">Jurnal</li>
	</ul>

	<div class="container">
		<div class="row">
	

		<h3 class="sub-header">JURNAL</h3>

			<div class="table-responsive"> 
			  <table class="table table-striped">
			   <tr>
			    <th>No</th>
			    <th>Judul</th>
			    <th>Kategori</th>
			    <th>Aksi</th>
			  </tr>

			   	@foreach($jurnal as $no=>$item)

            <tr>
                <td>{{ $no+1}}</td>
                <td>{{ $item->judul }}</td>
                <td><img src="{{ url('/upimg/cover') }}/{{ $item->cover }}" class="img-responsive" style="height: 50px; width: 80px;"></td>
                <td>
                    <a href="{{asset('pdf/jurnal/'.$item->file)}}">Download</a>
                   
                </td>
            </tr>
			@endforeach
			  </table>
			  </div>

			 		

		</div>
	</div>
@endsection