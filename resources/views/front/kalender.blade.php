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
		<li class="active">Kalender Akademik</li>
	</ul>
	
	<div class="container">
		<div class="row">
{!! $dataTable->table(['width' => '100%','class'=>'display'], true) !!}


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