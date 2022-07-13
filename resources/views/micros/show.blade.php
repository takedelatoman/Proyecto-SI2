@extends('adminlte::page')

@section('title', 'TuMejorRuta')

@section('content_header')
    <script src="https://www.gstatic.com/firebasejs/8.1.1/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.1.1/firebase-storage.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jsbarcode@3.11.0/dist/JsBarcode.all.min.js"></script>
    <div class="card-header  text-center">
        <h3><b>Editar Micro</b></h3>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/subir.css') }}">
@stop

@section('content')
    <div class="card">
        <div class="card-body">



            <form action="{{ route('micros.update', $micro->id) }}" method="post" novalidate>
                @csrf
                @method('put')

                <div>
                    <center>
                        <img src="{{ asset($micro->foto) }}" width="200" height="200" class="img-circle" />
                        <br>
                        <label for="name">Vista detallada de MicroID {{ $micro->id }} </label>
                    </center>
                </div>


                <div class="row" style="padding-bottom: 0.5rem; padding-top: 0.7rem">
                    <div class="col-md-6">

                        <label for="sexo">Chofer</label>
                        
                            @foreach ($users as $user)
                                @if ($user->cod_chofer == 1 && $user->id == $micro->id_user)
                                <input type="text" name="placa" class="form-control" value="{{ $user->name }}"
                                disabled>
                                @endif
                            @endforeach
                            
                        </select>
                    </div>


                    <div class="col-md-6">

                        <label for="sexo">Numero de Línea de Micro</label>
                       
                            @foreach ($lineas as $linea)
                                @if ($micro->id_linea == $linea->id)
                                <input type="text" name="placa" class="form-control" value="{{ $linea->numero }}"
                                 disabled>
                                @endif
                            @endforeach
                            
                        </select>

                    </div>
                </div>

                <div class="row" style="padding-bottom: 0.5rem">
                    <div class="col-md-4">
                        <label for="placa">Placa de Micro</label>
                        <input type="text" name="placa" class="form-control" value="{{ $micro->placa }}"
                            placeholder="Placa Identificadora" disabled>
                    </div>
                    <div class="col-md-4">
                        <label for="modelo">Modelo de Micro</label>
                        <input type="text" name="modelo" class="form-control" value="{{ $micro->modelo }}"
                            placeholder="Modelo" disabled>
                    </div>
                    <div class="col-md-4">
                        <label for="name">Número Interno</label>
                        <input type="text" name="num_interno" class="form-control" value="{{ $micro->num_interno }}"
                            placeholder="Número" disabled>
                    </div>
                </div>

                <div class="row" style="padding-bottom: 0.5rem">
                    <div class="col-md-4">
                        <label for="cant_asiento">Cantidad de Asientos</label>
                        <input type="text" name="cant_asiento" class="form-control" value="{{ $micro->cant_asiento }}"
                            placeholder="Cantidad de Asientos de Micro" disabled>
                    </div>
                    <div class="col-md-4">
                        <label for="fecha_asignacion">Fecha Asignación</label>
                        <input type="date" name="fecha_asignacion" class="form-control"
                            value="{{ $micro->fecha_asignacion }}" placeholder="Fecha de Asignación" disabled>
                    </div>
                    <div class="col-md-4">
                        <label for="fecha_baja">Fecha Baja</label>
                        <input type="date" name="fecha_baja" class="form-control" value="{{ $micro->fecha_baja }}"
                            placeholder="Fecha de Baja" disabled>
                    </div>
                </div>

                <div class="row" style="padding-bottom: 1.3rem">
                    <div class="col-md-6">
                        <label for="disponible">Dispobilidad</label>
                        <select name="disponible" id="disponible" class="form-control" onchange="habilitar()"
                            placeholder="Disponibilidad" disabled>
                            @if ($micro->disponible == 1)
                                <option value="1">Disponible</option>
                                <option value="0">No Disponible</option>
                            @else
                                <option value="0">No Disponible</option>
                                <option value="1">Disponible</option>
                            @endif
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="foto">Foto</label>
                        <input type="text" name="foto" class="form-control" value="{{ $micro->foto }}"
                            placeholder="Fotografía" disabled>
                    </div>

                </div>

                <br>


                <center>
                   
                    <a class="btn btn-warning btb-sm text-light" href="{{ route('micros.index') }}">Volver</a>
                </center>

            </form>

        </div>
        <df-messenger intent="WELCOME" chat-title="bots" agent-id="86938b5f-1e37-43dc-9f38-1bd5322b1eb7"
            language-code="es">
    </div>


@stop

@section('css')
    <link rel="stylesheet" href="{{ asset('css/bot.css') }}">
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')

@stop
