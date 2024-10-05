<!-- resources/views/bienvenida.blade.php -->
@extends('layouts.app')

@section('title', 'Bienvenido')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8 text-center">
            <h1 class="display-4">¡Bienvenido a la Aplicación!</h1>
            <p class="lead">Esta es una aplicación web construida.</p>
            <hr class="my-4">
            <p>Explora el contenido y disfruta de las funcionalidades de nuestra plataforma.</p>
            <a class="btn btn-primary btn-lg" href="{{ url('/autenticar') }}" role="button">Iniciar Sesión</a>
            <!-- <a class="btn btn-secondary btn-lg" href="{{ url('/mostrar') }}" role="button">Registrarse</a> -->
        </div>
    </div>

@endsection