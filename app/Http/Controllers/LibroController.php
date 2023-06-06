<?php

namespace App\Http\Controllers;

use App\Models\Libro;
use Illuminate\Http\Request;

/**
 * Class LibroController
 * @package App\Http\Controllers
 */
class LibroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $q = $request->input('q');
    
        $libros = Libro::where(function ($query) use ($q) {
            $query->where('nombre', 'LIKE', '%'.$q.'%')
                  ->orWhere('autor', 'LIKE', '%'.$q.'%');
        })
        ->where('disponible', 1)
        ->paginate();
    
        return view('libro.index', compact('libros'))
            ->with('i', (request()->input('page', 1) - 1) * $libros->perPage());
    }
    
    

               
    public function librostotales(Request $request)
    {
        $q = $request->input('q');
 
        $librostotales = Libro::where('nombre', 'LIKE', '%'.$q.'%')->orWhere('autor', 'LIKE', '%'.$q.'%')->paginate();
    
        return view('libro.librosT', compact('librostotales'))
            ->with('i', (request()->input('page', 1) - 1) * $librostotales->perPage());
    }

    
    
    

    public function pag()
    {
        return view('libros.principal');
    }

    public function libros()
    {
        return view('libro.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $libro = new Libro();
        return view('libro.create', compact('libro'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Libro::$rules);

        $libro = Libro::create($request->all());

        return redirect()->route('libros.index')
            ->with('success', 'Libro creado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $libro = Libro::find($id);

        return view('libro.show', compact('libro'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $libro = Libro::find($id);

        return view('libro.edit', compact('libro'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Libro $libro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Libro $libro)
    {
        request()->validate(Libro::$rules);

        $libro->update($request->all());

        return redirect()->route('libros.index')
            ->with('success', 'Libro actualizado con éxito');
    }
    public function librosT()
    {
        return view('libro.librosT');
    }
    /**
    
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $libro = Libro::find($id)->delete();

        return redirect()->route('libros.index')
            ->with('success', 'Libro eliminado con éxito');
    }
}
