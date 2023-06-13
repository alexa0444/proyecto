<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Compra
 *
 * @property $id
 * @property $nombre
 * @property $apellido
 * @property $direccion
 * @property $producto
 * @property $cantidad_p
 * @property $cuenta
 * @property $cedula
 * @property $correo
 * @property $total
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Compra extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'apellido' => 'required',
		'direccion' => 'required',
		'producto' => 'required',
		'cantidad_p' => 'required',
		'cuenta' => 'required',
		'cedula' => 'required',
		'correo' => 'required',
		'total' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','apellido','direccion','producto','cantidad_p','cuenta','cedula','correo','total'];



}
