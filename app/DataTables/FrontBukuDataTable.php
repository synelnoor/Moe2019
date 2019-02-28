<?php

namespace App\DataTables;

use App\Models\Buku;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\EloquentDataTable;

class FrontBukuDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    function words($value, $words = 100, $end = '...')
    {
        return \Illuminate\Support\Str::words($value, $words, $end);
    }
    public function dataTable($query)
    {
        $dataTable = new EloquentDataTable($query);

         return $dataTable->editColumn('desc','{!! str_limit($desc,$limit = 150, $end="...")!!}')
                    //->editColumn('link','{!! str_limit($link,$limit = 50, $end="...")!!}')
                    ->editColumn('dosen','{{$dosen["nama"]}}');
                    //->addColumn('action', 'jurnals.datatables_actions')
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Post $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Buku $model)
    {
        $model = Buku::with('dosen');
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
            ->columns($this->getColumns())
            ->minifiedAjax()
            //->addAction(['width' => '80px'])
            ->parameters([
                'dom'     => 'frtip',
                'order'   => [[0, 'desc']],
                'buttons' => [
                    'create',
                    'export',
                    'print',
                    'reset',
                    'reload',
                ],
                // 'initComplete' => "function() {
                //     this.api().columns().every(function() {
                //         var column = this;
                //         var input = document.createElement(\"input\");
                //         $(input).appendTo($(column.footer()).empty())
                //         .on('change', function () {
                //             column.search($(this).val(), false, false, true).draw();
                //         });
                //     });
                // }",
            ]);
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
             'judul',
            'dosen',
            'file'=>['name' => 'File', 'data' => 'file', 'render' => '"<img src=\""+data+"\" height=\"50\"/>"'],
            'desc',
            'link'=>['name' => 'link', 'data' => 'link', 'render' => '"<a href=\""+data+"\"  class=\"btn btn-success\">DOWNLOAD</a>"']
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'bukusdatatable_' . time();
    }
}