<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @SWG\Definition(
 *      definition="VisiMisi",
 *      required={""},
 *      @SWG\Property(
 *          property="id",
 *          description="id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="Visi",
 *          description="Visi",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="Misi",
 *          description="Misi",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="Tujuan",
 *          description="Tujuan",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="halaman",
 *          description="halaman",
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
class VisiMisi extends Model
{
    use SoftDeletes;

    public $table = 'visi_misis';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'Visi',
        'Misi',
        'Tujuan',
        'halaman'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'Visi' => 'string',
        'Misi' => 'string',
        'Tujuan' => 'string',
        'halaman' => 'string'
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
