<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

//usamos el modedlo product
use App\Models\Product;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //mostramos todos los registros desde la tabla product
        //guardamo en una variable la respuesta el metodo all()
        $products = Product::all();
        return $products;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //creando la funcion para guardar creando una instancia y se le asigna a la variable $product
        $product = new Product();
        $product->name = $request->name;
        $product->descripcion = $request->descripcion;
        $product->price = $request->price;
        $product->stock = $request->stock;
        $product->image = $request->image;
        $product->id_categoria = $request->id_categoria;
        $product->id_marca = $request->id_marca;

        //guardamos utilizando el metodo save()
        $product->save();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //mostrar por id utilizando el metodo find()
        $product = Product::find($id);
        return $product;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //utilizando metodo update()
        $product = Product::findOrFail($request->id);
        $product->name = $request->name;
        $product->descripcion = $request->descripcion;
        $product->price = $request->price;
        $product->stock = $request->stock;
        $product->image = $request->image;
        $product->id_categoria = $request->id_categoria;
        $product->id_marca = $request->id_marca;

        $product->save();
        return $product;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //utilizando metodo destroy()
        $product = Product::destroy($id);
        return $product;
    }
}
