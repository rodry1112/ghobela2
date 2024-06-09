<!-- Opciones y tablas de la base de datos -->
<div class = "table_scroll row my-4">
    <table class="table table-bordered table_width">
      
      <thead class="table_head">
        <tr> 
          <th scope="col">Id</th>
          <th scope="col">Nombre</th>
          <th scope="col">Email</th>
          <th scope="col" colspan="3">Edición</th>
        </tr>
      </thead>

      <tbody class="">
        @foreach ($usuarios as $usuario)
          <tr>
            
            <td>{{$usuario->id}}</td>
            <td>{{$usuario->name}}</td>
            <td>{{$usuario->email}}</td>
            <td><a href="{{route('user.show', $usuario->id)}}" class="update_table_admin">Mostrar</a></td>
            <td><a href="{{route('user.modify', $usuario->id)}}" class="update_table_admin">Editar</a></td>
            <td>
              <form action="{{route('user.destroy', $usuario)}}" method="POST">
                @csrf
                @method('delete')
                <button type="submit" class="update_table_admin">Eliminar</button>
              </form>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
</div>
<div class="paginate_admin">
  {{$usuarios->appends(['condicionUsuario' => $condicionUsuario, 'buscarUsuario' => $buscarUsuario])}}
</div>