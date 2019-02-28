@extends('layouts.web')
@section('styles')
    @include('layouts.datatables_css')
    <style type="text/css">
		.pagination>.active>a{
    		z-index: 3;
		    color: #fff;
		    cursor: default;
		    background-color: #333;
		    border-color: #333;
    	}
    </style>
@endsection
@section('content')
	<ul class="breadcrumb">
		<li>Home</li>
		<li class="active">Buku</li>
	</ul>

	<div class="container">
		<div class="row">
			<h3 class="sub-header">BUKU</h3>

			{!! $dataTable->table(['width' => '100%','class'=>'display'], true) !!}
			{{--
			<div class="table-responsive"> 
			  <table class="table table-striped">
			   <tr>
			    <th>No</th>
			    <th>Judul</th>
			    <th>Kategori</th>
			    <th>Dosen</th>
			    <th>Aksi</th>
			  </tr>

			   	@foreach($buku as $no=>$item)

            <tr>
                <td>{{ $no+1}}</td>
                <td>{{ $item->judul }}</td>
                <td><img src="{{ $item->file}}" class="img-responsive" style="height: 50px; width: 80px;"></td>
                 <td>{{$item->dosen->nama}}</td>
                <td>
                    <a href="{{$item->link}}">Download</a>
                   
                </td>
            </tr>
			@endforeach
			  </table>
			  </div>
			  --}}

		</div>
	</div>
@endsection

@section('scripts2')
    @include('layouts.datatables_js')
    {!! $dataTable->scripts() !!}

    // add by dandisy
    <script>
        $('#dataTableBuilder thead').append('<tr class="column-search"></tr>');
        $('#dataTableBuilder thead th').each(function() {
            var title = $(this).text();
            if(title === 'Action') {
                $('.column-search').append('<td></td>');
            } else {
                $('.column-search').append('<td><input type="text" placeholder="Search '+title+'" /></td>');
            }
        });

        var table = $('#dataTableBuilder').DataTable();

        var idx = 0;
        table.columns().every(function() {
            var that = this;
    
            $('input', $('.column-search td').get(idx)).on('keyup change', function() {
                if (that.search() !== this.value) {
                    that
                        .search(this.value)
                        .draw();
                }
            });

            idx++;
        });
    </script> 
@endsection