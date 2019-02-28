<?php

namespace App\Repositories;

use App\Models\Page;
use Webcore\Generator\Common\BaseRepository;

/**
 * Class PageRepository
 * @package App\Repositories
 * @version December 24, 2018, 8:11 am UTC
 *
 * @method Page findWithoutFail($id, $columns = ['*'])
 * @method Page find($id, $columns = ['*'])
 * @method Page first($columns = ['*'])
*/
class PageRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'title',
        'slug',
        'tag',
        'version',
        'language',
        'template',
        'status',
        'created_by',
        'updated_by'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Page::class;
    }
}
