<?php

namespace App\Repositories;

use App\Models\CoordCurso;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class CoordCursoRepository
 * @package App\Repositories
 * @version June 12, 2018, 3:35 am UTC
 *
 * @method CoordCurso findWithoutFail($id, $columns = ['*'])
 * @method CoordCurso find($id, $columns = ['*'])
 * @method CoordCurso first($columns = ['*'])
*/
class CoordCursoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'siape',
        'nome',
        'email',
        'contato'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return CoordCurso::class;
    }
}
