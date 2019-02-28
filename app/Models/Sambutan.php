<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @SWG\Definition(
 *      definition="Sambutan",
 *      required={""},
 *      @SWG\Property(
 *          property="id",
 *          description="id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="dosen",
 *          description="dosen",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="judul",
 *          description="judul",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="sambutan",
 *          description="sambutan",
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
class Sambutan extends Model
{
    use SoftDeletes;

    public $table = 'sambutans';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'dosen',
        'judul',
        'sambutan'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'dosen' => 'integer',
        'judul' => 'string',
        'sambutan' => 'string'
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
        return $this->belongsTo('App\Models\Dosen','dosen','id');
    }

    
}
