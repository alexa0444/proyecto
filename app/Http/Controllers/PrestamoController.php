<?php

namespace App\Http\Controllers;

use App\Models\Prestamo;
use Illuminate\Http\Request;
use App\Models\Libro;

/**
 * Class PrestamoController
 * @package App\Http\Controllers
 */
class PrestamoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

   public function index(Request $request)
   {
       $q = $request->input('q');
   
       $prestamos = Prestamo::where(function ($query) use ($q) {
           $query->where('Nombre_libro', 'LIKE', '%'.$q.'%')
                 ->orWhere('Nombre_estudiante', 'LIKE', '%'.$q.'%');
       })
       ->where('estado', 'Pendiente')
       ->paginate();

       return view('prestamo.index', compact('prestamos'))
       ->with('i', (request()->input('page', 1) - 1) * $prestamos->perPage());

   }

   public function prestamosT(Request $request)
   {
       $q = $request->input('q');
   
       $prestamos = Prestamo::where(function ($query) use ($q) {
           $query->where('Nombre_libro', 'LIKE', '%'.$q.'%')
                 ->orWhere('Nombre_estudiante', 'LIKE', '%'.$q.'%');
       })->paginate(20);
   
       return view('prestamo.prestamosT', compact('prestamos'))
           ->with('i', ($prestamos->currentpage() - 1) * $prestamos->perpage());
   }
   
   
      
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
public function create()
{
$prestamo = new Prestamo();
return view('prestamo.create', compact('prestamo'));
}



public function aceptar($id)
{
    $prestamo = Prestamo::find($id);

    if ($prestamo) {
        $prestamo->estado = 'Aceptado';
        $prestamo->save();

        // Cambiar la disponibilidad del libro
        $libro = Libro::find($prestamo->ID_libro);
        if ($libro) {
            $libro->disponible = 0;
            $libro->save();
        }

        return redirect()->route('prestamos.index')
            ->with('success', 'Préstamo aceptado con éxito');
    }

    return redirect()->route('prestamos.index')
        ->with('error', 'No se encontró el préstamo');
}



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Prestamo::$rules);

        $prestamo = Prestamo::create($request->all());

        return redirect()->route('prestamos.index')
            ->with('success', 'Prestamo creado con éxito');
    }


    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $prestamo = Prestamo::find($id);

        return view('prestamo.show', compact('prestamo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $prestamo = Prestamo::find($id);

        return view('prestamo.edit', compact('prestamo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Prestamo $prestamo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Prestamo $prestamo)
    {
        request()->validate(Prestamo::$rules);

        $prestamo->update($request->all());

        return redirect()->route('prestamos.index')
            ->with('success', 'Prestamo actualizado con éxito');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */

     public function destroy($id)
     {
         $prestamo = Prestamo::find($id);
     
         if ($prestamo) {
             $libro = Libro::find($prestamo->ID_libro);
     
             if ($libro) {
                 // Actualizar la disponibilidad del libro
                 $libro->disponible = 1;
                 $libro->save();
             }
     
             $prestamo->delete();
     
             return redirect()->route('prestamos.index')
                 ->with('success', 'Libro devuelto y préstamo eliminado con éxito');
         }
     
         return redirect()->route('prestamos.index')
             ->with('error', 'No se encontró el préstamo');
     }
     

}
