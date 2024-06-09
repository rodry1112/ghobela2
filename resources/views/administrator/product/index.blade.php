@extends('adminlte::page')

@section('css')
    <link rel="stylesheet" href="{{asset('css/style_admin.css')}}">
@stop

@section('js')
    <script src="https://kit.fontawesome.com/9591dc8836.js" crossorigin="anonymous"></script>
    <script src="{{asset('js/script_admin.js')}}"></script>
@stop

@section('title', 'indexProduct')

@section('content_header')  
    <article class = "row">
      <div class="col-lg-1"></div>
        <h1>Administración de productos</h1>
    </article>
@endsection

@section('content')
    <section class="row">
      <div class="col-lg-1"></div>
  
      <article class="control_product col-lg-10">
        
        <!-- Crear y restablecer tablas-->
        <div class="row my-4">
          <a href="{{route('product.create')}}" class="btn_admin col-lg-2 mx-2">Crear</a>
          <a href="{{route('product.index')}}" class="btn_admin col-lg-2 mx-2">Restablecer</a>
        </div>

        @include('administrator.product.components.search')
        @include('administrator.product.components.tables')
        
      </article>
    </section>
@stop