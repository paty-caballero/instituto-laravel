<div class="row">
        <table class="table table-striped table-hover table-bordered table-responsive">
          <thead>
            <tr>
              <th>Id</th>
              <th>Nombre</th>
              <th>Marca</th>
              <th>Categoria</th>
              <th>Acciones</th>
            </tr>
          </thead>

          <tbody>
            @foreach($datos as $producto)
            <tr>
              <td>{{ $producto->id }}</td>
              <td>{{ $producto->nombre }}</td>
              <td>{{ $producto->marca_id }}</td>
              <td>{{ $producto->categoria_id}}</td>
              <td><a href="{{ route('index', $producto->id) }}" class="btn btn-warning">Modificar</a></td>

            </tr>
            @endforeach

          </tbody>

        </table>

      </div>
      

        
     