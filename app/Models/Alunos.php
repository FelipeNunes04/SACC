<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Alunos
 * @package App\Models
 * @version June 10, 2018, 8:43 pm UTC
 *
 * @property string matricula
 * @property string nome
 * @property string email
 * @property string telefone
 * @property integer curso
 * @property string status
 */
class Alunos extends Model
{
    use SoftDeletes;

    public $table = 'alunos';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'matricula',
        'nome',
        'email',
        'telefone',
        'curso',
        'status'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'matricula' => 'string',
        'nome' => 'string',
        'email' => 'string',
        'telefone' => 'string',
        'curso' => 'integer',
        'status' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
