
{{-- resources/views/produtos/index.blade.php --}}
@extends('includes.base')

@section('title', 'Produtos')

@section('content')

@if (session('sucesso'))
{{ session('sucesso') }}
@endif

@extends("includes.base")

@section('title', 'Produtos')

@section('content')

@if (session('sucesso'))
<div class="sucesso">{{session('sucesso')}}</div>
@endif

<style>
    body {
        padding: 20px;
    }

    .table-container {
        margin-top: 50px;
    }

    table {
        border-collapse: collapse;
        width: 100%;
        max-width: 800px;
        margin: 0 auto;
    }

    th,
    td {
        font-family: system-ui;
        padding: 15px;
        text-align: left;
        border-bottom: 1px solid #ddd;
        width: 33.33%;
    }

    th {
        text-transform: uppercase;
        background-color: #ff0080;
        font-weight: bold;
        color: white;
    }

    tr:hover {
        background-color: #ffe7f6;
    }

    .sucesso {
        text-align: center;
        font-weight: bold;
        font-size: 2em;
        margin-bottom: 1em;
        font-family: system-ui;
        text-transform: uppercase;
        font-size: 20px;
        color: #00d42e;
    }

    .link {
        font-family: system-ui;
        margin: 20px auto;
        display: block;
        text-align: center;
        color: #fff;
        background-color: #9fd6ec;
        padding: 12px;
        text-decoration: none;
        border-radius: 4px;
        transition: background-color 0.3s;
        max-width: 200px;
        width: 100%;
    }

    .product-name {
        text-transform: uppercase;
        font-family: system-ui;
        padding: 15px;
        text-align: left;
        border-bottom: 1px solid #ddd;
        width: 33.33%;
        color: #000;
        text-decoration: none;
    }
</style>

<table>
    <tr>
        <th>Nome</th>
        <th>Preço</th>
        <th>Quantidade</th>
        <th>Editar</th>
        <th>Apagar</th>
    </tr>

    @foreach ($prods as $prod)
    <tr>
        <td><a href="{{ route('produtos.view', $prod->id) }}">{{ $prod->name }}</a></td>
        <td>R$ {{ number_format($prod->price, 2, ',', '.') }}</td>
        <td>{{ $prod->quantity }}</td>
        <td><a href="{{ route('produtos.edit', $prod->id) }}">Editar</a></td>
        <td><a href="{{ route('produtos.delete', $prod->id) }}">Apagar</a></td>
    </tr>
    @endforeach

</table>

<a href="{{ route('produtos.add') }}">Adicionar produto</a>
@endsection
