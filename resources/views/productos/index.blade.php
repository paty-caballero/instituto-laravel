<div class="row">
        <table class="table table-striped table-hover table-bordered table-responsive">
          <thead>
            <tr>
              <th>Id</th>
              <th>Nombre</th>
              <th>Precio</th>
              <th>Marca</th>
              <th>Categoria</th>
              <th>Acciones</th>
            </tr>
          </thead>

          <tbody>
            @foreach($datos as $producto)
            <tr>
              <td>{{ $producto->id }}</td>
              <td>{{ $producto->producto }}</td>
             <td>{{ $producto-> precio }}</td>
             <td>{{ $producto-> marca }}</td>
             <td>{{ $producto-> categoria }}</td>
             <td><a href="{{ route('productos.edit', ['producto' => $producto->id]) }}">Modificar</a> </td>
             <td>
                <form  action="{{ route('productos.destroy', $producto->id) }}" method="POST">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <button type="submit">Eliminar</button>
                </form>
             </td>

  
            </tr>
            @endforeach

          </tbody>

        </table>

      </div>
      

        
     