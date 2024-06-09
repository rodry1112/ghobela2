<!-- Busqueda -->
<div class="row row-cols-12">
    <p class="col-lg-2">Buscar por:</p>

    <form class="d-flex col-lg-7" action="{{route('product.index')}}" method="Get">

      <!-- @csrf -->

      <select class="form-select col-lg-5" aria-label="Default select example" name="condicionProducto">
        <option value="nombre">Nombre</option>
        <option value="genero">Genero</option>
        <option value="temporada">Temporada</option>
        <option value="numeroSerie">Numero de Serie</option>
      </select>
      <input class="form-control col-lg-7 mx-3" type="search" placeholder="Search" aria-label="Search" name="buscarProducto">
      <button class="btn_admin col-lg-4 mx-3" type="submit">Buscar</button>
    </form>
  </div>