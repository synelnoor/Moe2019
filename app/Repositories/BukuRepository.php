<?php

namespace App\Repositories;

use App\Models\Buku;
use Webcore\Generator\Common\BaseRepository;

/**
 * Class BukuRepository
 * @package App\Repositories
 * @version January 19, 2019, 1:47 pm UTC
 *
 * @method Buku findWithoutFail($id, $columns = ['*'])
 * @method Buku find($id, $columns = ['*'])
 * @method Buku first($columns = ['*'])
*/
class BukuRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'judul',
        'file',
        'link',
        'tumb',
        'desc'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Buku::class;
    }
}
