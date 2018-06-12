<?php

namespace App\Repositories;

use App\Models\Registros;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class RegistrosRepository
 * @package App\Repositories
 * @version June 12, 2018, 3:36 am UTC
 *
 * @method Registros findWithoutFail($id, $columns = ['*'])
 * @method Registros find($id, $columns = ['*'])
 * @method Registros first($columns = ['*'])
*/
class RegistrosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'titulo',
        'descricao',
        'carga_horaria',
        'inicio',
        'fim',
        'modalidade',
        'aluno'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Registros::class;
    }
}
