<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Libro
 *
 * @property $id
 * @property $nombre
 * @property $autor
 * @property $editorial
 * @property $fecha
 * @property $genero
 * @property $created_at
 * @property $updated_at
 * @property $disponible
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Libro extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'autor' => 'required',
		'editorial' => 'required',
		'fecha' => 'required',
		'genero' => 'required',
    'disponible' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_libro','nombre','autor','editorial','fecha','genero','disponible'];

    


}
