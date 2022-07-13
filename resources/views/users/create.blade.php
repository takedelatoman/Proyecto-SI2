@extends('adminlte::page')

@section('title', 'TuMejorRuta')

@section('content_header')
<script src="https://www.gstatic.com/firebasejs/8.1.1/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.1.1/firebase-storage.js"></script>

<div class="card-header  text-center">
    <h3><b>Registrar Usuario</b></h3>
</div>
@stop

@section('css')
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
<link rel="stylesheet" href="{{ asset('css/subir.css') }}">
@stop

@section('content')
<div class="card">
    <div class="card-body">

        @error('name')
        <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>¡Error!</strong> Este usuario ya está registrado.
        </div>
        @enderror
        <form action="{{ route('users.store') }}" method="post">
            @csrf

            @section('js')
            <script src="{{ asset('js/usuario.js') }}"></script>
            @endsection
            <!-- <center>
                {{-- separador --}}
                <div class="form-group col-md-3">
                    <img width="200" height="200" class="img-circle" id="foto">
                    <div class="custom-input-file">
                        <input type="file" id="file" accept="image/*" class="input-file" value="">
                        <i class="fas fa-file-upload"></i> Subir Foto...
                    </div>
                    <div class="col-12" id="app" style="text-align:center;">
                        <progress id="progress_bar" value="0" max="100"></progress>
                        <input type="hidden" value="{{ old('foto') }}" name="foto" id="fotov" title="foto" placeholder="https://example.com" list="defaultURLs" class="focus border-dark  form-control" oninvalid="this.setCustomValidity('Please match the requested format')">
                    </div>
                    @error('foto')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </center> -->
            <div class="row" style="padding-bottom: 0.5rem; padding-top: 0.7rem">
                <div class="col-md-6">
                    <label for="name">Nombre Completo</label>
                    <input type="text" name="name" class="form-control" value="" placeholder="Nombres y Apellidos " required>
                </div>
                @error('name')
                <span class="text-danger">{{ $message }}</span>
                @enderror
                <div class="col-md-3">
                    <label for="direccion">Carnet de Identidad</label>
                    <input type="text" name="ci" class="form-control" value="" maxlength="30" size="0" pattern="{5,30}" placeholder="dirección del usuario" required>
                </div>

                <!-- <div class="col-md-3">
                    <label for="sexo">Carnet de Identidad</label>
                    <select name="sexo" id="ci" class="form-control" onchange="habilitar()" placeholder="sexo" required>
                        <option value="Masculino">Masculino</option>
                        <option value="Femenino">Femenino</option>
                    </select>
                </div> -->
                <div class="col-md-3">
                    <label for="direccion">Fecha de Nacimiento</label>
                    <input type="date" name="fecha_nac" class="form-control" value="" maxlength="30" size="0" pattern="{5,30}" placeholder="dirección del usuario" required>
                </div>
                
            
            </div>


        

            <div class="row" style="padding-bottom: 0.5rem">
                <div class="col-md-6">
                    <label for="email">Correo Eectronico</label>
                    <input type="text" name="email" class="form-control" value="" placeholder="Ecriba el correo" required>
                    @error('email')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label for="password">Contraseña</label>
                    <input type="password" name="password" class="form-control" value="" placeholder="***********" required>
                    @error('password')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="row" style="padding-bottom: 0.5rem">
                    
                    <div class="col-md-12">
                        <label for="direccion">Roles</label>
                        <br>
                        <label><input type="checkbox" name="cod_admin" id="cod_admin" value="1" > Administrador</label><br>

                        <label><input type="checkbox" name="cod_chofer" id="cod_chofer" value="1" > Chofer</label><br>
                    </div>
                    
                </div>

               


      

            <center>
                <button class="btn btn-primary btb-sm text-light" type="submit">Crear Usuario</button>
                <a class="btn btn-warning btb-sm text-light" href="{{ route('users.index') }}">Volver</a>
            </center>
        </form>

    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', cargar, false);
    var rol = document.getElementById('select-roles');
    var empleados = document.getElementById('select-empleados');

    function habilitar() {
        if (rol.value > 0) {
            empleados.disabled = false
        } else {
            empleados.disabled = true
            empleados.value = 0
        }
    }

    function cargar() {
        if (rol.value > 0) {
            empleados.disabled = false
        } else {
            empleados.disabled = true
            empleados.value = 0
        }
    }
    /* function elegirE(){
        if(odontologos.value > 0){
            odontologos.disabled = false
        }
    } */

</script>
@stop

@section('css')
<link rel="stylesheet" href="{{ asset('css/bot.css') }}">
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')

@stop
