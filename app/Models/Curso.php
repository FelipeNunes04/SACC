<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Curso
 * @package App\Models
 * @version June 12, 2018, 3:35 am UTC
 *
 * @property string nome
 * @property integer carga
 * @property integer coordcurso
 * @property integer coordacc
 */
class Curso extends Model
{

    public $table = 'curso';
    
    public $timestamps = false;


    protected $primaryKey = 'idcurso';

    public $fillable = [
        'nome',
        'carga',
        'coordcurso',
        'coordacc'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'idcurso' => 'integer',
        'nome' => 'string',
        'carga' => 'integer',
        'coordcurso' => 'integer',
        'coordacc' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
