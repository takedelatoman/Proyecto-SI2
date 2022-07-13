@extends('adminlte::page')

@section('title', 'TuMejorRuta')

@section('content_header')

    <div class="card-header  text-center">
        <h3><b>Micros</b></h3>
    </div>

@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <a href="{{ route('micros.create') }}" class="btn btn-primary btb-sm"><i class="fas fa-micro-plus"></i> Registrar
                Micro</a>
            {{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                Reporte
            </button> --}}
        </div>
    </div>

    <div class="card">
        <!--<div class="card-body">-->
        <div class="card-body " style="overflow-x: scroll">


            <table class="table table-striped table-bordered shadow-lg mt-4 " id="usuarios" style="width:100%">
                <thead class="bg-dark">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Foto</th>
                        <th scope="col">Chofer</th>
                        <th scope="col">Linea</th>
                        <th scope="col">Placa</th>
                        <th scope="col">Modelo</th>
                        <th scope="col">Disponibilidad</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($micros as $micro)
                        <tr>
                            <center>
                                <td>{{ $micro->id }}</td>
                            </center>
                            <td>
                                <center>
                                    <img src="{{ asset($micro->foto) }}" {{-- class="img-circle" --}} width="75"
                                        height="75" />
                                </center>
                            @foreach ($users as $user)
                                @if ($micro->id_user == $user->id)
                                <td>{{ $user->name }}</td>
                                @endif
                            @endforeach
                            
                            @foreach ($lineas as $linea)
                                @if ($micro->id_linea == $linea->id)
                                <td>{{ $linea->numero }}</td>
                                @endif
                            @endforeach
                            <td>{{ $micro->placa }}</td>
                            <td>{{ $micro->modelo }}</td>

                            @if ($micro->disponible == 1)
                            <td>Disponible</td>
                            @else
                            <td>No Disponible</td>
                            @endif
                            
                            
                            <td>
                                <form action="{{ route('micros.destroy', $micro->id) }}" method="post">
                                    <!--<a class="btn btn-warning btn-sm text-light" href="#">-->
                                    {{-- <a class="btn btn-warning btn-sm text-light rounded-pill"
                                        href="{{ route('micros.show', $micro->id) }}">
                                        <i class="fas fa-eye"></i></a> --}}

                                    <a href="{{ route('micros.edit', $micro->id) }}"
                                        class="btn btn-primary btn-sm text-light rounded-pill">
                                        <i class="fas fa-edit"></i><a>
                                            @csrf
                                            @method('delete')

                                            <button onclick="return confirm('¿ESTÁ SEGURO DE BORRAR?')" type="submit"
                                                value="Borrar" class="btn btn-danger btn-sm text-light rounded-pill">
                                                <i class="fas fa-trash-alt"></i></button>

                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@stop

@section('css')
    <link rel="stylesheet" href="{{ asset('css/bot.css') }}">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap5.min.css">
@stop

@section('js')
    <script src="https://www.gstatic.com/dialogflow-console/fast/messenger/bootstrap.js?v=1"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#usuarios').DataTable();
        });
    </script>
@stop
