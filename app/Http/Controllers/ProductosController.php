<?php

namespace App\Http\Controllers;
use App\Models\Producto;
use App\Models\Marca;
use App\Models\Categoria;
use Illuminate\Http\Request;

class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Consulta SQL a la BD
        $datos= Producto::all();

    //Prueba   JSON     
    //Retornar vista de index
    /*$datos= Producto::join('marcas', 'marcas.id','=', 'productos.id')
        -> join('categorias', 'categorias.id','=', 'productos.id')
        ->  select('productos.*', 'marcas.nombre', 'categorias.nombre');
   
      */
      return view('productos.index')->with('datos', $datos);
    }

    public function create()
    {
        $datos= Marca::all();
        $datoss= Categoria::all();
        
        
        //Mostrar vista de crear 
        return view('productos.create')->with('datos', $datos )->with('datoss', $datoss );
    }

public function store(Request $request){
        //Aqui creamos el controlador para guardar un dato en la BD de productos 

        //return response()->json($request);

    if(Producto::create($request->all())){
            
    }
    else {
        return response()->json($request);
       
    }
}

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function show(Producto $producto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function edit(Producto $producto)
    {

        /* public function edit($id) {
    $computadoras= Computadora::findOrFail($id);
    return view('computadoras/computadorasedit')->with(compact('computadoras'));*/
 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Producto $producto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Producto $producto)
    {
        //
    }
}
