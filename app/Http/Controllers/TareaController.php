<?php

namespace App\Http\Controllers;

use App\Models\Tarea;
use Illuminate\Http\Request;

class TareaController extends Controller
{
    public function index(Request $request)
    {
        $q = $request->input('q');
        $estado = $request->input('estado');

        $query = Tarea::query();

        if ($estado === 'realizadas') {
            $query->where('estado', 'realizada');
        } elseif ($estado === 'pendientes') {
            $query->where('estado', 'pendiente');
        }

        $tareas = $query->where(function ($query) use ($q) {
                $query->where('nombre', 'LIKE', '%' . $q . '%')
                    ->orWhere('materia', 'LIKE', '%' . $q . '%')
                    ->orWhere('fecha', 'LIKE', '%' . $q . '%');
            })
            ->orderBy('fecha', 'desc')
            ->paginate();

        return view('tarea.index', compact('tareas', 'estado'))
            ->with('i', (request()->input('page', 1) - 1) * $tareas->perPage());
    }

    public function tareasPendientes(Request $request)
    {
        $estado = 'pendientes';

        $tareas = Tarea::where('estado', 'pendiente')->orderBy('fecha', 'desc')->paginate();

        return view('tarea.index', compact('tareas', 'estado'));
    }

    public function tareasRealizadas(Request $request)
    {
        $estado = 'realizadas';

        $tareas = Tarea::where('estado', 'realizada')->orderBy('fecha', 'desc')->paginate();

        return view('tarea.index', compact('tareas', 'estado'));
    }

 


    public function create()
    {
        $tarea = new Tarea();
        return view('tarea.create', compact('tarea'));
    }

    public function store(Request $request)
    {
        request()->validate(Tarea::$rules);

        $tarea = Tarea::create($request->all());

        return redirect()->route('tareas.index')
            ->with('success', 'Tarea created successfully.');
    }

    public function show($id)
    {
        $tarea = Tarea::find($id);

        return view('tarea.show', compact('tarea'));
    }

    public function edit($id)
    {
        $tarea = Tarea::find($id);

        return view('tarea.edit', compact('tarea'));
    }

    public function update(Request $request, Tarea $tarea)
    {
        request()->validate(Tarea::$rules);

        $tarea->update($request->all());

        return redirect()->route('tareas.index')
            ->with('success', 'Tarea updated successfully');
    }

    public function destroy($id)
    {
        $tarea = Tarea::find($id)->delete();

        return redirect()->route('tareas.index')
            ->with('success', 'Tarea deleted successfully');
    }
}

