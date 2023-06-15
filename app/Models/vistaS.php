<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


/**
 * Class vistaS
 *
 
 * @property $id
 * @property $nombre
 * @property $fecha
 * @property $fecha_inicio
 * @property $fecha_fin
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */

class vistaS extends Model
{
  
    static $rules = [
		'nombre' => 'required',
		'fecha' => 'required',
    'hora_inicio' => 'required',
    'hora_fin' => 'required',
	
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
      'nombre',
      'fecha',
      'hora_inicio',
      'hora_fin',
  ];



    // public function scopeFecha($query, $fecha)
    // {
    //     return $query->whereDate('fecha', $fecha);
    // }
    public function getTareas($fecha)
    {
        return DB::table('vista_s')->whereRaw('DATE(fecha) = ?', [$fecha])->get();
    }
    
    
}


