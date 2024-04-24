<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

//usamos el modelo marca
use App\Models\Categoria;

use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //mostramos todos los registros desde la tabla product
        //guardamo en una variable la respuesta el metodo all()
        $categorias = Categoria::all();
        return $categorias;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //creando la funcion para guardar creando una instancia y se le asigna a la variable $marca
        $categoria = new Categoria();
        $categoria->name = $request->name;
        
        //utilizando el metodo save()
        $categoria->save();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //mostrar por id utilizando el metodo find()
        $categoria = Categoria::find($id);
        return $categoria;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //utilizando metodo update()
        $categoria = Categoria::findOrFail($request->id);
        $categoria->name = $request->name;

        $categoria->save();
        return $categoria;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //utilizando metodo destroy()
        $categoria = Categoria::destroy($id);
        return $categoria;
    }
}
