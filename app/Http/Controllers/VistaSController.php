<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\vistaS;
use Carbon\Carbon;

class VistaSController extends Controller
{
    public function vistaSemanal()
{
    $diasSemana = collect(['Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado', 'Domingo']);
    $fechasSemana = $this->obtenerFechasSemana();
    $vistaS = new vistaS(); 

    return view('vistaS.semanal', compact('diasSemana', 'fechasSemana', 'vistaS'));
}

public function agregarTarea(Request $request)
{
    $request->validate([
        'fecha' => 'required|date',
        'hora_inicio' => 'required|date_format:H:i',
        'hora_fin' => 'required|date_format:H:i|after:hora_inicio',
        'nombre' => 'required|string'
    ]);

    vistaS::create([
        'nombre' => $request->nombre,
        'fecha' => $request->fecha,
        'hora_inicio' => $request->hora_inicio,
        'hora_fin' => $request->hora_fin
    ]);

    return redirect()->back()->with('success', 'Tarea agregada exitosamente.');
}



public function completarTarea($id)
{
    vistaS::destroy($id);
    return redirect()->back()->with('success', 'Tarea marcada como completada');
}


    private function obtenerFechasSemana()
    {
        $fechaActual = Carbon::now();
        $semanaInicio = $fechaActual->startOfWeek();
        $fechasSemana = [];

        for ($i = 0; $i < 7; $i++) {
            $fechasSemana[] = $semanaInicio->clone()->addDays($i);
        }

        return $fechasSemana;
    }
}
