<?php

namespace App\Repositories;

use App\Models\Dosen;
use Webcore\Generator\Common\BaseRepository;

/**
 * Class DosenRepository
 * @package App\Repositories
 * @version January 19, 2019, 12:36 pm UTC
 *
 * @method Dosen findWithoutFail($id, $columns = ['*'])
 * @method Dosen find($id, $columns = ['*'])
 * @method Dosen first($columns = ['*'])
*/
class DosenRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nama',
        'jabatan',
        'file',
        'desc',
        'line',
        'col'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Dosen::class;
    }
}
