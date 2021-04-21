
<form  action="{{ route('productos.store') }}" method="POST">
          {{ csrf_field() }}
      <fieldset>
        <legend>Nuevo producto</legend>

        <div>
          <label >Nombre</label>
          <div>
            <input type="text" name="nombre" id="nombre" placeholder="Nombre">
          </div>
        </div>

        <div>
          <label >Precio</label>
          <div>
            <input type="number"  name="precio" id="precio" placeholder="Precio">
          </div>
        </div>

        <div>
          <label>Seleccione la marca</label>
          <div>
            <select  id="select" name="marca_id">
              @foreach ($datos as $marca)
                <option value="{{ $marca->id }}">{{$marca->nombre}}</option>
              @endforeach
            </select>
          
          </div>
        </div>
        <div>
          <label>Seleccione la Categoria</label>
          <div>
            <select  id="select" name="categoria_id">
              @foreach ($datoss as $categoria)
                <option value="{{ $categoria->id }}">{{$categoria->nombre}}</option>
              @endforeach
            </select>
          
          </div>
        </div>

          <div>
            <button type="reset" >Borrar</button>
            <button type="submit" >Agregar</button>
          </div>
          
      </fieldset>
    </form>