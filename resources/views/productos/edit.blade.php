
  <form  action="{{ route('productos.update', $producto->id) }}" method="POST">
    <input type="hidden" name="_method" value="PUT">
          {{ csrf_field() }}
      <fieldset>
        <legend>Editar Producto</legend>

        <div>
          <label >Nombre</label>
          <div>
            <input type="text" name="nombre" id="nombre" value="{{ $producto->nombre}}">
          </div>
        </div>

        <div>
          <label >Precio</label>
          <div>
            <input type="number"  name="precio" id="precio" value="{{ $producto->precio}}">
          </div>
        </div>
        <div>
            <label >Seleccione la marca</label>
            <select class="form-control" id="select" name="marca_id">
              @foreach ($marca as $marca)
                  @if ($marca->id == $producto->marca_id)
                    <option selected value="{{ $marca->id }}">{{$marca->nombre}}</option>
                  @else
                    <option value="{{ $marca->id }}">{{$marca->nombre}}</option>
                  @endif
              @endforeach
            </select>
          </div>
          <div>
            <label >Seleccione la Categoria</label>
            <select class="form-control" id="select" name="categoria_id">
              @foreach ($categoria as $categoria)
                  @if ($categoria->id == $producto->categoria_id)
                    <option selected value="{{ $categoria->id }}">{{$categoria->nombre}}</option>
                  @else
                    <option value="{{ $categoria->id }}">{{$categoria->nombre}}</option>
                  @endif
              @endforeach
            </select>
        </div>
          <div>
            <button type="submit">Actualizar</button>
            <button type="reset">Cancelar</button>
          </div>
          
      </fieldset> 
  </form>
