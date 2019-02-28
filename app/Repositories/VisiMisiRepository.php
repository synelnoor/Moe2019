<?php

namespace App\Repositories;

use App\Models\VisiMisi;
use Webcore\Generator\Common\BaseRepository;

/**
 * Class VisiMisiRepository
 * @package App\Repositories
 * @version January 7, 2019, 10:24 am UTC
 *
 * @method VisiMisi findWithoutFail($id, $columns = ['*'])
 * @method VisiMisi find($id, $columns = ['*'])
 * @method VisiMisi first($columns = ['*'])
*/
class VisiMisiRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'Visi',
        'Misi',
        'Tujuan',
        'halaman'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return VisiMisi::class;
    }
}
