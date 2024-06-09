@extends('adminlte::page')

@section('css')
    <link rel="stylesheet" href="{{asset('css/style_admin.css')}}">
@stop

@section('js')
    <script src="https://kit.fontawesome.com/9591dc8836.js" crossorigin="anonymous"></script>
    <script src="{{asset('js/script_admin.js')}}"></script>
@stop

@section('title', 'createProduct')

@section('content_header')
    
@stop

@section('content')
    <section class="row">
        <div class="col-lg-2"></div>
        <div class="col-lg-8 my-5">

            <h5 class="title_form_admin col-lg-12">Usuario</h5>

            <section class="form_admin">
                <div class="row">
                    
                    <div class="col-lg-8">
                        <div class="row">
                            <label class="col-lg-4">Nombre:</label>
                            <div class="col-lg-8">{{$usuario->name}}</div>
                        </div>

                        <div class="row">
                            <label class="col-lg-4">Email:</label>
                            <div class="col-lg-8">{{$usuario->email}}</div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </section>
@stop

