<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Alunos
 * @package App\Models
 * @version June 12, 2018, 3:26 am UTC
 *
 * @property string matricula
 * @property string nome
 * @property string email
 * @property string contato
 * @property string curso
 */
class Alunos extends Model
{

    public $table = 'alunos';
    
    public $timestamps = false;


    protected $primaryKey = 'idalunos';

    public $fillable = [
        'matricula',
        'nome',
        'email',
        'contato',
        'curso'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'idalunos' => 'integer',
        'matricula' => 'string',
        'nome' => 'string',
        'email' => 'string',
        'contato' => 'string',
        'curso' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
