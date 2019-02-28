<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @SWG\Definition(
 *      definition="Artikel",
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
 *          property="isi",
 *          description="isi",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="gambar",
 *          description="gambar",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="tanggal",
 *          description="tanggal",
 *          type="string",
 *          format="date"
 *      ),
 *      @SWG\Property(
 *          property="hits",
 *          description="hits",
 *          type="integer",
 *          format="int32"
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
class Artikel extends Model
{
    use SoftDeletes;

    public $table = 'artikels';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'judul',
        'isi',
        'gambar',
        'tanggal',
        'hits'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'judul' => 'string',
        'isi' => 'string',
        'gambar' => 'string',
        'tanggal' => 'date',
        'hits' => 'integer'
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

    
}
