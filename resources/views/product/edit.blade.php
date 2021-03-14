@extends('adminlte::page')

@section('title', 'CRUD')

@section('content_header')
    <h1>Editar registro</h1>
@stop

@section('content')
<form action="/products/{{$product->id}}" method="POST">    
    @method('PUT')
    @csrf
    <div class="mb-3">
        <label class="form-label">Código</label>
        <input id="code" name="code" type="text" value="{{$product->code}}" class="form-control" tabindex="1">
    </div>
    <div class="mb-3">
        <label class="form-label">Descripción</label>
        <input id="decription" name="description" type="text" value="{{$product->description}}" class="form-control" tabindex="2">
    </div>
    <div class="mb-3">
        <label class="form-label">Cantidad</label>
        <input id="quantity" name="quantity" type="number" value="{{$product->quantity}}" class="form-control" tabindex="3">
    </div>
    <div class="mb-3">
        <label class="form-label">Precio</label>
        <input id="price" name="price" type="number" value="{{$product->price}}" class="form-control" tabindex="3">
    </div>
    <a href="/products" class="btn btn-secondary" tabindex="5">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
@stop

