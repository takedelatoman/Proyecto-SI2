@extends('adminlte::page')

@section('title', 'TuMejorRuta')

@section('content_header')
    <script src="https://www.gstatic.com/firebasejs/8.1.1/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.1.1/firebase-storage.js"></script>

    <div class="card-header  text-center">
        <h3><b>Registrar Micro</b></h3>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/subir.css') }}">
@stop

@section('content')
    <div class="card">
        <div class="card-body">


            <form action="{{ route('micros.store') }}" method="post">
                @csrf

            @section('js')
                <script src="{{ asset('js/usuario.js') }}"></script>
            @endsection

            <div class="row" style="padding-bottom: 0.5rem; padding-top: 0.7rem">
                <div class="col-md-6">

                    <label for="sexo">Chofer</label>
                    <select name="id_user" id="id_user" class="form-control" placeholder="Chofersexo" required>
                        @foreach ($users as $user)
                            @if ($user->cod_chofer == 1)
                                <option value="{{ $user->id }}">{{ $user->name }}</option>
                            @endif
                        @endforeach
                    </select>
                </div>


                <div class="col-md-6">

                    <label for="sexo">Numero de Línea de Micro</label>
                    <select name="id_linea" id="id_linea" class="form-control" onchange="habilitar()"
                        placeholder="Linea" required>
                        @foreach ($lineas as $linea)
                            <option value="{{ $linea->id }}">{{ $linea->numero }}</option>
                        @endforeach
                    </select>

                </div>
            </div>

            <div class="row" style="padding-bottom: 0.5rem">
                <div class="col-md-4">
                    <label for="placa">Placa de Micro</label>
                    <input type="text" name="placa" class="form-control" value=""
                        placeholder="Placa Identificadora" required>
                </div>
                <div class="col-md-4">
                    <label for="modelo">Modelo de Micro</label>
                    <input type="text" name="modelo" class="form-control" value="" placeholder="Modelo"
                        required>
                </div>
                <div class="col-md-4">
                    <label for="name">Número Interno</label>
                    <input type="text" name="num_interno" class="form-control" value="" placeholder="Número"
                        required>
                </div>
            </div>

            <div class="row" style="padding-bottom: 0.5rem">
                <div class="col-md-4">
                    <label for="cant_asiento">Cantidad de Asientos</label>
                    <input type="text" name="cant_asiento" class="form-control" value=""
                        placeholder="Cantidad de Asientos de Micro" required>
                </div>
                <div class="col-md-4">
                    <label for="fecha_asignacion">Fecha Asignación</label>
                    <input type="date" name="fecha_asignacion" class="form-control" value=""
                        placeholder="Fecha de Asignación" required>
                </div>
                <div class="col-md-4">
                    <label for="fecha_baja">Fecha Baja</label>
                    <input type="date" name="fecha_baja" class="form-control" value=""
                        placeholder="Fecha de Baja" required>
                </div>
            </div>

            <div class="row" style="padding-bottom: 1.3rem">
                <div class="col-md-6">
                    <label for="disponible">Dispobilidad</label>
                    <select name="disponible" id="disponible" class="form-control" onchange="habilitar()"
                        placeholder="Disponibilidad" required>

                        <option value="1">Disponible</option>
                        <option value="0">No Disponible</option>

                    </select>
                </div>
                <div class="col-md-6">
                    <label for="foto">Foto</label>
                    <input type="text" name="foto" class="form-control" value="" placeholder="Fotografía"
                        required>
                </div>

            </div>




            <center>
                <button class="btn btn-primary btb-sm text-light" type="submit">Registrar Micro</button>
                <a class="btn btn-warning btb-sm text-light" href="{{ route('micros.index') }}">Volver</a>
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
