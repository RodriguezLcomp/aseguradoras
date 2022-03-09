@extends('adminlte::page')

@section('title', '')

@section('content_header')
    <h1>Bienvenido</h1>
@stop

@section('content')
    <p>Bienvenido al panel de control de la Caja</p>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        console.log('Hi!');
    </script>
@stop
