@extends('adminlte::page')
@extends('footer')
@section('title', 'tablero')
@section('content_header')
    <h1>Bienvenido a ventasweb</h1>
@stop

@section('content')
    <p>Bienvenido al panel de administración.</p>
@yield('footer')
@stop
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop
@section('js')
    <script> console.log('Hi!'); </script>
@stop