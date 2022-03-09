@extends('adminlte::page')

@section('title', 'Admin')

@section('content_header')
    <h1 onclick="funcion()">Bienvenido</h1>
@stop

@section('content')
    <p>Welcome to this beautiful admin panel.</p>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop
