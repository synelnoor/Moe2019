<?php

namespace App\Repositories;

use App\Models\Artikel;
use Webcore\Generator\Common\BaseRepository;

/**
 * Class ArtikelRepository
 * @package App\Repositories
 * @version January 5, 2019, 1:38 pm UTC
 *
 * @method Artikel findWithoutFail($id, $columns = ['*'])
 * @method Artikel find($id, $columns = ['*'])
 * @method Artikel first($columns = ['*'])
*/
class ArtikelRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'judul',
        'isi',
        'gambar',
        'tanggal',
        'hits'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Artikel::class;
    }
}
