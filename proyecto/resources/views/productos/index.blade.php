
@extends('layouts.app')
@section('content')
Lista de productos en la base de datos...
<table class="table">
    <thead>
        <tr>
            
          <th>Id</th>
          <th>Nombre</th>
          <th>Precio</th>
          <th>Descripción</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($productos as $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->nombre }}</td>
                <td>{{ $product->precio }}</td>
                <td>{{ $product->descripcion }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection