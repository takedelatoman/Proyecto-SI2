@extends('adminlte::page')

@section('title', 'TuMejorRuta')

@section('content_header')
    <script src="https://www.gstatic.com/firebasejs/8.1.1/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.1.1/firebase-storage.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jsbarcode@3.11.0/dist/JsBarcode.all.min.js"></script>
    <div class="card-header  text-center">
        <h3><b>Editar Línea de Micro</b></h3>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/subir.css') }}">
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            

            <form action="{{ route('lineas.update', $linea->id) }}" method="post" novalidate>
                @csrf
                @method('put')

                <div class="row" style="padding-bottom: 1rem; padding-top: 0.7rem">
                    <div class="col-md-6">
                        <label for="name">Numero de la Línea de Micro</label>
                        <input type="text" name="numero" class="form-control" value="{{ $linea->numero }}"
                            placeholder="Número" required>
                    </div>
                    @error('name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    <div class="col-md-3">
                        <label for="direccion">Dirección de Transitaje</label>
                        <input type="text" name="direccion" class="form-control" value="{{ $linea->direccion }}"
                            maxlength="30" size="0" pattern="{5,30}" placeholder="Dirección de del micro" required>
                    </div>


                    <div class="col-md-3">
                        <label for="direccion">Foto</label>
                        <input type="text" name="foto" class="form-control" value="{{ $linea->foto }}" maxlength="30"
                            size="0" pattern="{5,30}" placeholder="Fotografia" required>
                    </div>


                </div>

                <br>


                <center>
                    <button class="btn btn-primary btb-sm text-light" type="submit">Guardar</button>
                    <a class="btn btn-warning btb-sm text-light" href="{{ route('lineas.index') }}">Volver</a>
                </center>

            </form>

        </div>


    @stop

    @section('css')
        <link rel="stylesheet" href="{{ asset('css/bot.css') }}">
        <link rel="stylesheet" href="/css/admin_custom.css">
    @stop

    @section('js')

    @stop
