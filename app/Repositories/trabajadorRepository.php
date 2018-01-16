<?php

namespace App\Repositories;

use App\Models\trabajador;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class trabajadorRepository
 * @package App\Repositories
 * @version January 16, 2018, 4:26 pm UTC
 *
 * @method trabajador findWithoutFail($id, $columns = ['*'])
 * @method trabajador find($id, $columns = ['*'])
 * @method trabajador first($columns = ['*'])
*/
class trabajadorRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
        'apellido',
        'cedula',
        'cargo',
        'email',
        'activo'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return trabajador::class;
    }
}
