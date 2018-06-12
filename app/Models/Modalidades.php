<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Modalidades
 * @package App\Models
 * @version June 12, 2018, 6:38 pm UTC
 *
 * @property string titulo
 * @property string descricao
 * @property integer carga_maxima
 * @property integer carga_efetuada
 * @property integer carga_ganha
 */
class Modalidades extends Model
{

    public $table = 'modalidades';
    
    public $timestamps = false;


    protected $primaryKey = 'idmodalidades';

    public $fillable = [
        'titulo',
        'descricao',
        'carga_maxima',
        'carga_efetuada',
        'carga_ganha'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'idmodalidades' => 'integer',
        'titulo' => 'string',
        'descricao' => 'string',
        'carga_maxima' => 'integer',
        'carga_efetuada' => 'integer',
        'carga_ganha' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
