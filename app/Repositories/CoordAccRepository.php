<?php

namespace App\Repositories;

use App\Models\CoordAcc;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class CoordAccRepository
 * @package App\Repositories
 * @version June 12, 2018, 3:35 am UTC
 *
 * @method CoordAcc findWithoutFail($id, $columns = ['*'])
 * @method CoordAcc find($id, $columns = ['*'])
 * @method CoordAcc first($columns = ['*'])
*/
class CoordAccRepository extends BaseRepository
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
        return CoordAcc::class;
    }
}
