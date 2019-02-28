<?php

namespace App\Repositories;

use App\Models\Kalender;
use Webcore\Generator\Common\BaseRepository;

/**
 * Class KalenderRepository
 * @package App\Repositories
 * @version January 19, 2019, 1:55 pm UTC
 *
 * @method Kalender findWithoutFail($id, $columns = ['*'])
 * @method Kalender find($id, $columns = ['*'])
 * @method Kalender first($columns = ['*'])
*/
class KalenderRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'judul',
        'file',
        'desc'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Kalender::class;
    }
}
