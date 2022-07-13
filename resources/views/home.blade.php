@extends('adminlte::page')

@section('title', 'TuMejorRuta')

@section('content_header')
<h1>TuMejorRuta</h1>
@stop

@section('content')
<div class="card">
    <div class="card-header">
        <h1 class="card-title">Objetivo</h1>
    </div>

    <div class="card-body">
        <p>El objetivo principal de este proyecto es desarrollar una aplicación relacionada con los transportes públicos para ciudades inteligentes.</p>
    </div>

</div>

<div style="width: 6rem; display: flexbox; justify-content: center;" >
    <img style="margin-left: 10rem" width="1000rem" src="https://4.bp.blogspot.com/-35lwDhzKiqM/UYLJG43lckI/AAAAAAAAFfo/fJbUbYMdZxc/s1600/paradas+micros.jpg" alt="">
</div>

@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>console.log('hi!')</script>
@stop