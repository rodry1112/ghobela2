@extends('adminlte::page')

@section('css')
    <link rel="stylesheet" href="{{asset('css/style_admin.css')}}">
@stop

@section('js')
    <script src="https://kit.fontawesome.com/9591dc8836.js" crossorigin="anonymous"></script>
    <script src="{{asset('js/script_admin.js')}}"></script>
@stop

@section('title', 'ShowProduct')

@section('content_header')  
    
@endsection

@section('content')
    
    <section class="row">
        <div class="col-lg-2"></div>
        <div class="col-lg-8 my-5">

            <h5 class="title_form_admin col-lg-12">Producto</h5>

            <section class="form_admin">
                <div class="row">

                    <div class="col-lg-4 align-middle image_wrapper_admin">
                        <div class="image_admin">
                            <img id="img_data_admin" src="{{asset($producto->imagen)}}" alt="...">
                        </div>
                    </div>
                    
                    <div class="col-lg-8">
                        <div class="row">
                            <label class="col-lg-4">Nombre:</label>
                            <div class="col-lg-8">{{$producto->nombre}}</div>
                        </div>

                        <div class="row">
                            <label class="col-lg-4">Genero:</label>
                            <div class="col-lg-8">{{ucwords($producto->genero)}}</div>
                        </div>

                        <div class="row">
                            <label class="col-lg-4">Temporada:</label>
                            <div class="col-lg-8">{{ucwords($producto->temporada)}}</div>
                        </div>
                        
                        <div class="row">
                            <label class="col-lg-4">Categoria:</label>
                            <div class="col-lg-8">
                                @foreach ($categorias as $categoria)
                                    {{ucwords($categoria->tipo)}}
                                @endforeach
                            </div>
                        </div>

                        <div class="row">
                            <label class="col-lg-4">Marca:</label>
                            <div class="col-lg-8">
                                @foreach ($marcas as $marca)
                                    {{ucwords($marca->marca)}}
                                @endforeach
                            </div>
                        </div>

                        <div class="row">
                            <label class="col-lg-4">Colores:</label>
                            <div class="col-lg-8">
                                @foreach ($colors as $color)
                                    {{$color->color}}
                                @endforeach
                            </div>
                        </div>

                        <div class="row">
                            <label class="col-lg-4">Tallas:</label>
                            <div class="col-lg-8">
                                @foreach ($tallas as $talla)
                                    {{$talla->talla}}
                                @endforeach
                            </div>
                        </div>

                        <div class="row">
                            <label class="col-lg-4">Visible:</label>
                            <div class="col-lg-8">{{$producto->visible}}</div>
                        </div>

                        <div class="row">
                            <label class="col-lg-4">activo:</label>
                            <div class="col-lg-8">{{$producto->activo}}</div>
                        </div>

                        <div class="row">
                            <label class="col-lg-4">Destacado:</label>
                            <div class="col-lg-8">{{$producto->destacado}}</div>
                        </div>

                        <div class="row">
                            <label class="col-lg-4">Novedad:</label>
                            <div class="col-lg-8">{{$producto->novedad}}</div>
                        </div>
                        
                        <div class="row">
                            <label class="col-lg-4">numeroSerie:</label>
                            <div class="col-lg-8">{{$producto->numeroSerie}}</div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </section>
    
@stop

