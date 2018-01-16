<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class trabajador
 * @package App\Models
 * @version January 16, 2018, 4:26 pm UTC
 *
 * @property string nombre
 * @property string apellido
 * @property string cedula
 * @property string cargo
 * @property string email
 * @property string activo
 */
class trabajador extends Model
{
    // use SoftDeletes;

    public $table = 'trabajadores';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'nombre',
        'apellido',
        'cedula',
        'cargo',
        'email',
        'activo'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'nombre' => 'string',
        'apellido' => 'string',
        'cedula' => 'string',
        'cargo' => 'string',
        'email' => 'string',
        'activo' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombre' => 'required',
        'apellido' => 'required',
        'cedula' => 'required',
        'cargo' => 'required',
        'activo' => 'required'
    ];

    
}
