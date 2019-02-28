<?php

namespace App\Repositories;

use App\Models\Jurnal;
use Webcore\Generator\Common\BaseRepository;

/**
 * Class JurnalRepository
 * @package App\Repositories
 * @version January 19, 2019, 1:43 pm UTC
 *
 * @method Jurnal findWithoutFail($id, $columns = ['*'])
 * @method Jurnal find($id, $columns = ['*'])
 * @method Jurnal first($columns = ['*'])
*/
class JurnalRepository extends BaseRepository
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
        return Jurnal::class;
    }
}
