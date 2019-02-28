<?php

namespace App\Repositories;

use App\Models\Berita;
use Webcore\Generator\Common\BaseRepository;

/**
 * Class BeritaRepository
 * @package App\Repositories
 * @version January 7, 2019, 7:37 am UTC
 *
 * @method Berita findWithoutFail($id, $columns = ['*'])
 * @method Berita find($id, $columns = ['*'])
 * @method Berita first($columns = ['*'])
*/
class BeritaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'judul',
        'file',
        'isi'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Berita::class;
    }
}
