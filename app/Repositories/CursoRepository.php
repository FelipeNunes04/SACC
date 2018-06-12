<?php

namespace App\Repositories;

use App\Models\Curso;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class CursoRepository
 * @package App\Repositories
 * @version June 12, 2018, 3:35 am UTC
 *
 * @method Curso findWithoutFail($id, $columns = ['*'])
 * @method Curso find($id, $columns = ['*'])
 * @method Curso first($columns = ['*'])
*/
class CursoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nome',
        'carga',
        'coordcurso',
        'coordacc'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Curso::class;
    }
}
