<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @SWG\Definition(
 *      definition="Buku",
 *      required={""},
 *      @SWG\Property(
 *          property="id",
 *          description="id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="judul",
 *          description="judul",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="file",
 *          description="file",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="link",
 *          description="link",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="tumb",
 *          description="tumb",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="desc",
 *          description="desc",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="created_at",
 *          description="created_at",
 *          type="string",
 *          format="date-time"
 *      ),
 *      @SWG\Property(
 *          property="updated_at",
 *          description="updated_at",
 *          type="string",
 *          format="date-time"
 *      )
 * )
 */
class Buku extends Model
{
    use SoftDeletes;

    public $table = 'bukus';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'judul',
        'file',
        'link',
        'tumb',
        'desc',
        'dosen_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'judul' => 'string',
        'file' => 'string',
        'link' => 'string',
        'tumb' => 'string',
        'desc' => 'string',
        'dosen_id'=>'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    public function getTableColumns() {
        return $this->getConnection()->getSchemaBuilder()->getColumnListing($this->getTable());
    }

    public function dosen()
    {
        return $this->belongsTo('App\Models\Dosen','dosen_id','id');
    }
}
