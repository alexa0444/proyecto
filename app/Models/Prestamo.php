<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Prestamo
 *
 * @property $id
 * @property $ID_libro
 * @property $Nombre_libro
 * @property $Fecha_prestamo
 * @property $Fecha_devolucion
 * @property $ID_estudiante
 * @property $Nombre_estudiante
 * @property $created_at
 * @property $updated_at
 * @property $estado
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Prestamo extends Model
{
    
    static $rules = [
		'ID_libro' => 'required',
		'Nombre_libro' => 'required',
		'Fecha_prestamo' => 'required',
		'Fecha_devolucion' => 'required',
		'ID_estudiante' => 'required',
		'Nombre_estudiante' => 'required',
    'estado' => 'required',

    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['ID_libro','Nombre_libro','Fecha_prestamo','Fecha_devolucion','ID_estudiante','Nombre_estudiante', 'estado'];



}
