@extends('admin.layouts.main')
@section('contenido')
    <h1>Estoy en productos</h1>
    <form action="/admin/productos" method="POST">
        @csrf
        <button class="btn btn-primary" type="submit">Aceptar</button>
    </form>
@endsection
