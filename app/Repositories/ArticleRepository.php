<?php

namespace App\Repositories;

use App\Models\Article;
use Webcore\Generator\Common\BaseRepository;

/**
 * Class ArticleRepository
 * @package App\Repositories
 * @version January 7, 2019, 8:39 am UTC
 *
 * @method Article findWithoutFail($id, $columns = ['*'])
 * @method Article find($id, $columns = ['*'])
 * @method Article first($columns = ['*'])
*/
class ArticleRepository extends BaseRepository
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
        return Article::class;
    }
}
