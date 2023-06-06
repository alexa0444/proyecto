<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prestamo;
use App\Models\Libro;


class PrestamoestudiantController extends Controller
{
  

    public function showForm()
    {
        $librosDisponibles = Libro::where('disponible', true)->get();
        $nombreUsuario = auth()->user()->name;
        $idUsuario = auth()->id();
        return view('estudiant.solicitarP', compact('librosDisponibles', 'nombreUsuario', 'idUsuario'));
    }
    

    

    public function store(Request $request)
    {
        // Validar los datos del formulario
        $validatedData = $request->validate([
            'ID_libro' => 'required|exists:libros,id',
            'Nombre_libro' => 'required',
            'Fecha_prestamo' => 'required',
            'Fecha_devolucion' => 'required',
            'ID_estudiante' => 'required',
            'Nombre_estudiante' => 'required',
        ]);

        // Crear un nuevo registro de préstamo en la base de datos
        Prestamo::create($validatedData);

 
        return redirect('/home')->with('success', 'Préstamo registrado exitosamente');
    }
}
