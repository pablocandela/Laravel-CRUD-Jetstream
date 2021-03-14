@extends('adminlte::page')

<!-- CSS -->
<link rel="stylesheet" href="{{ URL::asset('css/base.css') }}" />
<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w=="
crossorigin="anonymous" />

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap5.min.css" rel="stylesheet">
@stop

@section('title', 'CRUD')

@section('content_header')
        <h1>Productos</h1>
@stop

@section('content')
<a href="/products/create"  class="btn btn-secondary mt-4 mb-4">Agregar &nbsp;<i class="fas fa-plus"></i></a>
<div class="table-responsive">
<table id="products" class="table table-striped table-bordered shadow-lg mt-4" style="width:100%">
    <thead class="bg-primary text-white">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Código</th>
            <th scope="col">Descripción</th>
            <th scope="col">Cantidad</th>
            <th scope="col">Precio</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($products as $product)
        <tr>
            <td>{{ $product->id }}</td>
            <td>{{ $product->code }}</td>
            <td>{{ $product->description }}</td>
            <td>{{ $product->quantity }}</td>
            <td>{{ "$" . $product->price }}</td>
            <td>
                <form action="{{ route('products.destroy',$product->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <a href="/products/{{$product->id}}/edit" class="btn btn-info mb-4 mr-2">Editar <i class="fas fa-pencil-alt ml-1"></i></a>
                    <button type="submit" class="btn btn-danger mb-4 mr-2">Borrar  <i class="far fa-trash-alt ml-1"></i></button>
                </form> 
            </td>
        </tr>
        @endforeach      
    </tbody>
</table>
</div>
@stop



@section('js')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap5.min.js"></script>
    <script type="text/javascript" src="{{ URL::asset('js/scripts.js') }}"></script>
@stop
