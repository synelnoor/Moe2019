<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @SWG\Definition(
 *      definition="Dosen",
 *      required={""},
 *      @SWG\Property(
 *          property="id",
 *          description="id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="nama",
 *          description="nama",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="jabatan",
 *          description="jabatan",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="file",
 *          description="file",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="desc",
 *          description="desc",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="line",
 *          description="line",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="col",
 *          description="col",
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
class Dosen extends Model
{
    use SoftDeletes;

    public $table = 'dosens';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'nama',
        'jabatan',
        'file',
        'desc',
        'fakultas_id',
        'line',
        'col'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'nama' => 'string',
        'jabatan' => 'string',
        'file' => 'string',
        'desc' => 'string',
        'fakultas_id'=>'integer',
        'line' => 'integer',
        'col' => 'integer'
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
     public function jurnal()
    {
        return $this->hasMany('App\Models\Jurnal');
    }

     public function buku()
    {
        return $this->hasMany('App\Models\Buku');
    }
     public function sambutan()
    {
        return $this->hasMany('App\Models\Sambutan');
    }

     public function fakultas()
    {
        return $this->belongsTo('App\Models\Fakultas','fakultas_id','id');
    }
    
}
