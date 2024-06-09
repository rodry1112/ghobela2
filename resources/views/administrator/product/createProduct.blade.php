@extends('adminlte::page')

@section('css')
    <link rel="stylesheet" href="{{asset('css/style_admin.css')}}">
@stop

@section('js')
    <script src="https://kit.fontawesome.com/9591dc8836.js" crossorigin="anonymous"></script>
    <script src="{{asset('js/script_admin.js')}}"></script>
@stop

@section('title', 'createProduct')

@section('content')
    
    <section class="row">
        <div class="col-lg-2"></div>
        <div class="col-lg-8 my-5">
            <h5 class="title_form_admin">CREACIÓN DE PRODUCTO</h5>

            <form method="POST" action="{{route('product.store')}}" enctype="multipart/form-data" class="form_admin">

                @csrf   

                @include('administrator.product.components.form')
            </form>
        </div>
    </section>

    <script>
        //Modificación de imagenes
        const wrapper = document.querySelector(".image_wrapper_admin");
        const cancelBtn = document.querySelector("#cancel_btn_admin");
        const defaultBtn = document.getElementById('default_btn_image');
        const customBtn = document.querySelector("#custom_btn_image");
        const img = document.querySelector("#img_data_admin");
        const fileName = document.querySelector(".file_name_admin");
        let regExp = /[0-9a-zA-Z\^\&\'\@\{\}\[\]\,\$\=\!\-\#\(\)\.\%\+\~\_]+$/;

        defaultBtn.addEventListener('change', changeImage);

        function defaultBtnActive(){
            defaultBtn.click();
        }
        
        function changeImage(){
            const file = this.files[0];

            if(file){
                const reader = new FileReader();

                reader.onload = function(){
                    const result = reader.result;
                    img.src = result;
                    wrapper.classList.add("active");
                }
                cancelBtn.addEventListener('click', function(){
                    img.src = "";
                    wrapper.classList.remove("active");
                });

                reader.readAsDataURL(file);
            }

            if(this.value){
                let valueStore = this.value.match(regExp);
                fileName.textContent = valueStore;
            }
        }

        //Agregar color al arreglo
        var conteoColor = 0;
        var conteoTalla = 0;

        function agregarColor() {
            var texto = document.getElementById("inputColor").value;
            if (texto.trim() !== "") {
                var nuevoDivColor = document.createElement("div");
                nuevoDivColor.className = "col-lg-3 new_input";
                nuevoDivColor.innerHTML = texto;
                
                var colorDiv = document.createElement("input");
                colorDiv.className = "color_admin col-lg-6";
                colorDiv.setAttribute("name", ("color" + "[" + conteoColor + "]"));
                colorDiv.setAttribute("type", "text");
                colorDiv.setAttribute("value", texto);
                colorDiv.setAttribute("hidden" , "true");
                conteoColor++;

                var botonBorrarColor = document.createElement("i");
                
                botonBorrarColor.setAttribute("class", "fa-solid fa-xmark col-lg-2 btn_delete_input");

                botonBorrarColor.onclick = function() {
                    eliminarDivColor(nuevoDivColor);
                };
                nuevoDivColor.appendChild(colorDiv);
                nuevoDivColor.appendChild(botonBorrarColor);
                document.getElementById("contenedorColor").appendChild(nuevoDivColor);
                document.getElementById("inputColor").value = ""; // Limpiar el input
            }
        }
        function eliminarDivColor(div) {
            document.getElementById("contenedorColor").removeChild(div);
        }

        function agregarTalla() {
            var texto = document.getElementById("inputTalla").value;
            if (texto.trim() !== "") {
                var nuevoDivTalla = document.createElement("div");
                nuevoDivTalla.className = "col-lg-3 new_input";
                nuevoDivTalla.innerHTML = texto;

                var tallaDiv = document.createElement("input");
                tallaDiv.className = "color_admin col-lg-6";
                tallaDiv.setAttribute("name", ("talla" + "[" + conteoTalla + "]"));
                tallaDiv.setAttribute("type", "text");
                tallaDiv.setAttribute("value", texto);
                tallaDiv.setAttribute("hidden" , "true");
                conteoTalla++;

                var botonBorrarTalla = document.createElement("i");
                
                botonBorrarTalla.setAttribute("class", "fa-solid fa-xmark col-lg-2 btn_delete_input");

                botonBorrarTalla.onclick = function() {
                    eliminarDivTalla(nuevoDivTalla);
                };
                nuevoDivTalla.appendChild(tallaDiv);
                nuevoDivTalla.appendChild(botonBorrarTalla);
                document.getElementById("contenedorTalla").appendChild(nuevoDivTalla);
                document.getElementById("inputTalla").value = ""; // Limpiar el input
            }
        }
        function eliminarDivTalla(div) {
            document.getElementById("contenedorTalla").removeChild(div);
        }
        
    </script>
    
@endsection
    
