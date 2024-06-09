@extends('adminlte::page')

@section('css')
    <link rel="stylesheet" href="{{asset('css/style_admin.css')}}">
@stop

@section('js')
    <script src="https://kit.fontawesome.com/9591dc8836.js" crossorigin="anonymous"></script>
    <script src="{{asset('js/script_admin.js')}}"></script>
@stop

@section('title', 'createProduct')

<section class="row">
    <div class="col-lg-2"></div>
    <div class="col-lg-8 my-5">
        <h5 class="title_form_admin">EDITAR USUARIO</h5>
        <form method="POST" action="{{route('user.update', $usuario)}}" enctype="multipart/form-data" class="form_admin">

            @csrf
            @method('put')

            @include('administrator.user.components.form')
            </div>
        </form>
    </div>
</section>

@endsection