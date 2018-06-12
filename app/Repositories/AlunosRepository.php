<?php

namespace App\Repositories;

use App\Models\Alunos;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class AlunosRepository
 * @package App\Repositories
 * @version June 12, 2018, 3:26 am UTC
 *
 * @method Alunos findWithoutFail($id, $columns = ['*'])
 * @method Alunos find($id, $columns = ['*'])
 * @method Alunos first($columns = ['*'])
*/
class AlunosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'matricula',
        'nome',
        'email',
        'contato',
        'curso'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Alunos::class;
    }
}
