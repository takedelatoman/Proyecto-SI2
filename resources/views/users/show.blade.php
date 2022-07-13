@extends('adminlte::page')

@section('title', 'TuMejorRuta')

@section('content_header')

@stop

@section('content')

<div class="card">
    <div class="card-body">
        @if (session('success'))
        <div class="alert alert-success" role="success">
            {{ session('success') }}
        </div>
        @endif
        {{-- datos --}}
        <div class="card">
            <div class="card-header">
                <center>
                    <h2 class="font-weight-bold px-2">Información del Usuario</h2>
                </center>
            </div>
        </div>


        <div>
            <center>
                <img src="{{ asset($user->foto) }}" width="200" height="200" class="img-circle" />
                <br>
                <label for="name">Vista detallada de {{ $user->name }} </label>
            </center>
        </div>

        <div class="row">

            <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                <div class="form-group">
                    <label for="name">Nombre de usuario: </label>
                    <input type="text" name="name" class="form-control" value="{{ $user->name }}" disabled>
                </div>
            </div>
            <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                <div class="form-group">
                    <label for="name">Carnet de Identidad: </label>
                    <input type="text" name="name" class="form-control" value="{{ $user->ci }}" disabled>
                </div>
            </div>
            {{-- <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                <div class="form-group">
                    <label for="name">Sexo: </label>
                    <input type="text" name="name" class="form-control" value="{{ $user->sexo }}" disabled>
                </div>
            </div>


            <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                <div class="form-group">
                    <label for="name">Edad: </label>
                    <input type="text" name="name" class="form-control" value="{{ $user->edad }}" disabled>
                </div>
            </div> --}}

            @if ($user->cod_admin == 1)
            <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                <div class="form-group">
                    <label for="name">Rol: </label>
                    <input type="text" name="name" class="form-control" value="Administrador" disabled>
                </div>
            </div>
            @else
            <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                <div class="form-group">
                    <label for="name">Cargo: </label>
                    <input type="text" name="name" class="form-control" value="Chofer" disabled>
                </div>
            </div>
            @endif
            

            
            <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                <div class="form-group">
                    <label for="name">Correo: </label>
                    <input type="text" name="name" class="form-control" value="{{ $user->email }}" disabled>
                </div>
            </div>

           

            <br>
        </div>
        <center>
            <a class="btn btn-warning btb-sm text-light" href="{{ route('users.index') }}">Volver</a>
            <a href="{{ route('users.edit', $user->id) }}" class="btn btn-primary btb-sm text-light"> Editar </a>
        </center>

    </div>
</div>
@stop

@section('css')
<link rel="stylesheet" href="{{ asset('css/bot.css') }}">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap5.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap5.min.css">
@stop

@section('js')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap5.min.js"></script>
<script>
    $(document).ready(function() {
        $('#empresas').DataTable();
    });

</script>
@stop
