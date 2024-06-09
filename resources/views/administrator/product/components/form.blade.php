<div class="row">
    
        <div class="col-lg-4 form_image_admin">
            <div class="image_wrapper_admin">
                <div class="image_admin">
                    <img id="img_data_admin" src="" alt="">
                </div>
                <div class="">
                    <div class="icon_image_admin"><i class="fa-solid fa-cloud-arrow-up"></i></div>
                    <div class="text_image_admin">No hay archivo escogido</div>
                    <div id="cancel_btn_admin"><i class="fa-solid fa-xmark"></i></div>
                    <div class="file_name_admin">Nombre de la imagen</div>
                </div>
            </div>
            
            <input id="default_btn_image" type="file" name="imagen" accept="image/*" hidden>
            <div onclick="defaultBtnActive()" id="custom_btn_image">Elije una imagen</div>
        </div>


        <div class="col-lg-8">
            <div class="mb-3 row">
                <label for="nombreProducto" class="form-label col-lg-4">Nombre:</label>
                <input name="nombre" class="form-control col-lg-8" value="{{old('nombre')}}" type="text" placeholder="Nombre del Producto:" aria-label="default input example">
            </div>

            <div class="mb-3 row">
                <label class="form-label col-lg-4">Marca:</label>
                <input name="marca" value="{{old('marca')}}" class="form-control col-lg-8" type="text" placeholder="Nombre de la Marca:" aria-label="default input example">
            </div>
            
            <div class="mb-3 row">
                <label for="radioGenero" class="col-lg-4">Genero:</label>

                <select class="form-select col-lg-8 " aria-label="Default select example" name="genero">
                    <option value="masculino">Masculino</option>
                    <option value="femenino">Femenino</option>
                    <option value="Otro">Otro</option>
                </select>
            </div>

            <div class="mb-3 row">
                <label for="radioTemporada" class="col-lg-4">Temporada:</label>
                <select class="form-select col-lg-8" aria-label="Default select example" name="temporada">
                    <option value="primavera">Primavera</option>
                    <option value="verano">Verano</option>
                    <option value="otoño">Otoño</option>
                    <option value="invierno">Invierno</option>
                </select>
            </div>

            <div class="mb-3 row">
                <label for="categoria" class="col-lg-4">Categoria:</label>
                <select class="form-select col-lg-8" aria-label="Default select example" name="categoria">
                    <option value="ropa">Ropa</option>
                    <option value="joyeria">Joyeria</option>
                </select>
            </div>

            <div class="mb-3 row">
                <label for="colorProducto" class="form-label col-lg-4">Colores:</label>
                <input id="inputColor" class="form-control col-lg-6" value="" type="text" placeholder="Agregar Color:" aria-label="default input example">
                <p class="btn btn-primary col-lg-2" onclick="agregarColor()">Agregar</p>
                <div id="contenedorColor" class="row col-lg-12"></div>
            </div>
            
            <div class="mb-3 row">
                <label for="tallaProducto" class="form-label col-lg-4">Tallas:</label>
                <input id="inputTalla" class="form-control col-lg-6" value="" type="text" placeholder="Agregar Talla:" aria-label="default input example">
                <p class="btn btn-primary col-lg-2" onclick="agregarTalla()">Agregar</p>
                <div id="contenedorTalla" class="row col-lg-12"></div>
            </div>

            <!-- 
            <div class="mb-3 row">
                <label for="talla" class="col-lg-4">Talla:</label>
                <select class="form-select col-lg-8" aria-label="Default select example" name="talla">
                    <option value="talla xs">Talla XS</option>
                    <option value="talla s">Talla S</option>
                    <option value="talla m">Talla M</option>
                    <option value="talla l">Talla L</option>
                    <option value="talla xl">Talla XL</option>
                    <option value="talla xxl">Talla XXL</option>
                </select>
            </div>
            -->

            <div class="mb-3 row">
                <label for="radioVisible" class="col-lg-3">Visible: </label>
                <div class="form-check form-check-inline col-lg-3">
                    <input class="form-check-input" type="radio" name="visible" value="1" checked>
                    <label class="form-check-label" for="radioVisible1">Si</label>
                </div>
                <div class="form-check form-check-inline col-lg-3">
                    <input class="form-check-input" type="radio" name="visible" value="0">
                    <label class="form-check-label" for="radioVisible2">No</label>
                </div>
            </div>

            <div class="mb-3 row">
                <label for="radioActivo" class="col-lg-3">Activo:</label>
                <div class="form-check form-check-inline col-lg-3">
                    <input class="form-check-input" type="radio" name="activo" value="1" checked>
                    <label class="form-check-label" for="radioActivo1">Si</label>
                </div>
                <div class="form-check form-check-inline col-lg-3">
                    <input class="form-check-input" type="radio" name="activo" value="0">
                    <label class="form-check-label" for="radioActivo2">No</label>
                </div>
            </div>

            <div class="mb-3 row">
                <label class="form-label col-lg-4">Numero de serie:</label>
                <input name="numeroSerie" value="{{old('numeroSerie')}}" class="form-control col-lg-8" type="text" aria-label="default input example">
            </div>

            <button type="submit" class="btn btn-primary">Crear</button>
            <a href="{{route('product.index')}}" class="btn btn-secondary">Cancelar</a>
        </div>
</div>
