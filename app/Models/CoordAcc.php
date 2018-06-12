<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class CoordAcc
 * @package App\Models
 * @version June 12, 2018, 3:35 am UTC
 *
 * @property integer siape
 * @property string nome
 * @property string email
 * @property string contato
 */
class CoordAcc extends Model
{

    public $table = 'coordacc';
    
    public $timestamps = false;


    protected $primaryKey = 'idcoordacc';

    public $fillable = [
        'siape',
        'nome',
        'email',
        'contato'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'idcoordacc' => 'integer',
        'siape' => 'integer',
        'nome' => 'string',
        'email' => 'string',
        'contato' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
