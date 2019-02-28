@section('css')
    @include('layouts.datatables_css')
@endsection

{!! $dataTable->table(['width' => '100%'], true) !!}

@section('scripts')
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

           // Truncate a string
           function strtrunc(str, max, add){
                    add = add || '...';
                    return (typeof str === 'string' && str.length > max ? str.substring(0, max) + add : str);
                };
                
                // $(document).ready( function () {
                //     var table = $('#dataTableBuilder').DataTable({
                //         'columnDefs': [
                //             {
                //                 'targets': 1,
                //                 'render': function(data, type, full, meta){
                //                 if(type === 'display'){
                //                     data = strtrunc(data, 10);
                //                 }
                                
                //                 return data;
                //                 }
                //             }
                //         ]
                        
                //     });
                // });
    </script> 
@endsection