<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Estudiante
 *
 * @property $id
 * @property $Nombre
 * @property $Curso
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Estudiante extends Model
{
    
    static $rules = [
		'Nombre' => 'required',
		'Curso' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Nombre','Curso'];



}
