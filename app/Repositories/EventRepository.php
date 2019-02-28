<?php

namespace App\Repositories;

use App\Models\Event;
use Webcore\Generator\Common\BaseRepository;

/**
 * Class EventRepository
 * @package App\Repositories
 * @version February 16, 2019, 9:25 am UTC
 *
 * @method Event findWithoutFail($id, $columns = ['*'])
 * @method Event find($id, $columns = ['*'])
 * @method Event first($columns = ['*'])
*/
class EventRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nama',
        'tgl',
        'desc'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Event::class;
    }
}
