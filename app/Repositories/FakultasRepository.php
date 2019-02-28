<?php

namespace App\Repositories;

use App\Models\Fakultas;
use Webcore\Generator\Common\BaseRepository;

/**
 * Class FakultasRepository
 * @package App\Repositories
 * @version February 10, 2019, 12:30 pm UTC
 *
 * @method Fakultas findWithoutFail($id, $columns = ['*'])
 * @method Fakultas find($id, $columns = ['*'])
 * @method Fakultas first($columns = ['*'])
*/
class FakultasRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nama',
        'desc'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Fakultas::class;
    }
}
