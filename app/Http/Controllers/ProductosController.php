<?php

namespace App\Http\Controllers;
use App\Models\Producto;
use App\Models\Marca;
use App\Models\Categoria;
use Illuminate\Http\Request;

class ProductosController extends Controller
{
    public function index()
    {
    //Consulta SQL a la BD
      // $datos= Producto::all();

     $datos = Producto:: select('productos.id','productos.nombre as producto', 
     'productos.precio', 'marcas.nombre as marca', 'categorias.nombre as categoria')
                ->join('marcas', 'marcas.id','=', 'productos.marca_id')
                ->join('categorias', 'categorias.id','=', 'productos.categoria_id')
                -> get();
    return view('productos.index')->with('datos', $datos);
        
    //Prueba   JSON
      // return response()->json($datos);
    //Retornar vista de index
     
    }

    public function create()
    {
        $datos= Marca::all();
        $datoss= Categoria::all();
        
        
        //Mostrar vista de crear 
        return view('productos.create')->with('datos', $datos )->with('datoss', $datoss );
    }

    public function store(Request $request)
    {
            //Aqui creamos el controlador para guardar un dato en la BD de productos 

            //return response()->json($request);

        if(Producto::create($request->all())){
                
        }
        else {
            return response()->json($request);
        
        }
    }

    public function show(Producto $producto)
    {
        //
    }

    public function edit($producto)
    {

        $marca= Marca::all();
        $categoria= Categoria::all();
        $producto= Producto::findOrFail($producto);
        return view('productos.edit')->with('marca', $marca )
        ->with('producto', $producto )->with('categoria', $categoria );
   
    }

    public function update(Request $request, $producto)
    {
        $this->validate($request, [
            'nombre' => 'required',
            'precio' => 'required',
          ]);
            $producto= Producto::find($producto);
    
                    $producto->nombre = $request->nombre;
                    $producto->precio = $request->precio;
                    $producto->marca_id = $request->marca_id;
                    $producto->categoria_id = $request->categoria_id;
        if($producto->save()){
            return ('Datos guardados satisfactoriamente');
        }
        else {
            return back()->with('El producto no pudo ser procesado!, vuelva a intentarlo.');
        }
    }

    public function destroy($producto)
    {
      $producto= Producto::findOrFail($producto);
      $producto->delete();
      return redirect()->route('productos.index');
      
    }
}

