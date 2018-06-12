<?php

namespace App\Repositories;

use App\Models\Modalidades;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ModalidadesRepository
 * @package App\Repositories
 * @version June 12, 2018, 6:38 pm UTC
 *
 * @method Modalidades findWithoutFail($id, $columns = ['*'])
 * @method Modalidades find($id, $columns = ['*'])
 * @method Modalidades first($columns = ['*'])
*/
class ModalidadesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'titulo',
        'descricao',
        'carga_maxima',
        'carga_efetuada',
        'carga_ganha'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Modalidades::class;
    }
}
