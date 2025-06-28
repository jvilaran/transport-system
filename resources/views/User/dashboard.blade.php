@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <h1>Hola, <?= $user['name']; ?></h1>
        <h2>Bienvenido al sistema de transporte</h2>
        <p>Este es el dashboard del usuario.</p>
@endsection


