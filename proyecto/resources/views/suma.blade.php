
@extends('layouts.app')
@section('content')
    

    <h1>Suma de dos números</h1>

    
    <form action="/suma" method="POST">
        @csrf
        <label for="num1">Número 1:</label>
        <input type="number" name="num1" id="num1">
        <br>
        <label for="num2">Número 2:</label>
        <input type="number" name="num2" id="num2">
        <br>
        <input type="submit" value="Sumar">
    </form>
    @if (isset($resultado))
        <p>El resultado de la suma es: {{ $resultado }}</p>
    @endif
    @endsection
    
