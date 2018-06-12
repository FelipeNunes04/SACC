<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Registros
 * @package App\Models
 * @version June 12, 2018, 3:36 am UTC
 *
 * @property string titulo
 * @property string descricao
 * @property integer carga_horaria
 * @property date inicio
 * @property date fim
 * @property integer modalidade
 * @property integer aluno
 */
class Registros extends Model
{

    public $table = 'registros';
    
    public $timestamps = false;


    protected $primaryKey = 'idregistros';

    public $fillable = [
        'titulo',
        'descricao',
        'carga_horaria',
        'inicio',
        'fim',
        'modalidade',
        'aluno'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'idregistros' => 'integer',
        'titulo' => 'string',
        'descricao' => 'string',
        'carga_horaria' => 'integer',
        'inicio' => 'date',
        'fim' => 'date',
        'modalidade' => 'integer',
        'aluno' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'aluno'
    ];

    
}
