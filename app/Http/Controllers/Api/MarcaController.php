<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

//usamos el modelo marca
use App\Models\Marca;

use Illuminate\Http\Request;

class MarcaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //mostramos todos los registros desde la tabla product
        //guardamo en una variable la respuesta el metodo all()
        $marcas = Marca::all();
        return $marcas;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //creando la funcion para guardar creando una instancia y se le asigna a la variable $marca
        $marca = new Marca();
        $marca->name = $request->name;
        
        //utilizando el metodo save()
        $marca->save();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //mostrar por id utilizando el metodo find()
        $marca = Marca::find($id);
        return $marca;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //utilizando metodo update()
        $marca = Marca::findOrFail($request->id);
        $marca->name = $request->name;

        $marca->save();
        return $marca;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //utilizando metodo destroy()
        $marca = Marca::destroy($id);
        return $marca;
    }
}
