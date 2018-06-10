<?php

namespace App\Repositories;

use App\Models\Alunos;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class AlunosRepository
 * @package App\Repositories
 * @version June 10, 2018, 8:43 pm UTC
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
        'telefone',
        'curso',
        'status'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Alunos::class;
    }
}
