<!-- Opciones y tablas de la base de datos -->
<div class = "table_scroll row my-4">
    <table class="table table-bordered table_width">
      
        <thead class="table_head">
          <tr> 
            <th scope="col">Nombre</th>
            <th scope="col">Genero</th>
            <th scope="col">Temporada</th>
            <th scope="col">Visible</th>
            <th scope="col">Activo</th>
            <th scope="col">Destacado</th>
            <th scope="col">Novedad</th>
            <th scope="col">Nro Serie</th>
            <th scope="col" colspan="3">Edición</th>
          </tr>
        </thead>

        <tbody class="">
          @foreach ($productos as $producto)
            <tr>
              <td>{{$producto->nombre}}</td>
              <td>{{$producto->genero}}</td>
              <td>{{$producto->temporada}}</td>
              <td>{{$producto->visible}}</td>
              <td>{{$producto->activo}}</td>
              <td>{{$producto->destacado}}</td>
              <td>{{$producto->novedad}}</td>
              <td>{{$producto->numeroSerie}}</td>
              <td><a href="{{route('product.show', $producto->id)}}" class="update_table_admin">Mostrar</a></td>
              <td><a href="{{route('product.modify', $producto->id)}}" class="update_table_admin">Editar</a></td>
              <td>
                <form action="{{route('product.destroy', $producto->id)}}" method="POST">
                  @csrf
                  @method('delete')
                  <button class="update_table_admin" type="submit">Eliminar</button>
                </form>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
</div>

<div class="paginate_admin">
    {{$productos->appends(['condicionProducto' => $condicionProducto, 'buscarProducto' => $buscarProducto])}}
</div>