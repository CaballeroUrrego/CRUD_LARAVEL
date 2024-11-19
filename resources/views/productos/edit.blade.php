@extends('layouts.app')

@section('content')
    <h1>Editar Producto</h1>
    <form method="POST" action="{{ route('productos.update', $producto) }}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $producto->nombre }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
@endsection
