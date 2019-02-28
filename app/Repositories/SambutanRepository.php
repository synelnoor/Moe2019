<?php

namespace App\Repositories;

use App\Models\Sambutan;
use Webcore\Generator\Common\BaseRepository;

/**
 * Class SambutanRepository
 * @package App\Repositories
 * @version January 19, 2019, 1:40 pm UTC
 *
 * @method Sambutan findWithoutFail($id, $columns = ['*'])
 * @method Sambutan find($id, $columns = ['*'])
 * @method Sambutan first($columns = ['*'])
*/
class SambutanRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'dosen',
        'judul',
        'sambutan'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Sambutan::class;
    }
}
