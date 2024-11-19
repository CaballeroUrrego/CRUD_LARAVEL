@extends('layouts.app')

@section('content')
    <h1>Crear Nuevo Producto</h1>
    <form method="POST" action="{{ route('productos.store') }}">
        @csrf
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" required>
        </div>
        <button type="submit" class="btn btn-primary">Crear</button>
    </form>
@endsection
