{{-- resources/views/produtos/index.blade.php --}}
@extends('includes.base')

@section('title', 'Usuarios')

@section('content')
@if (session('sucesso'))
<div class="success-message">{{ session('sucesso') }}</div>
@endif

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">


<div class="search-container">
    <form action="{{ route('produtos') }}" method="POST">
        @csrf
        <input type="text" name="busca" class="search-input" placeholder="Pesquisar"><br><br>
        <select class="search-input2" name="ord">
            <option value="asc">Crescente</option>
            <option value="desc">Descrescente</option>
        </select>
        <button type="submit" class="search-button"><i class="fas fa-search"></i></button>
    </form>
</div>

<div class="table-container">
    <table class="product-table">
        <thead>
            <tr>
                <th>Nome</th>
                <th>E-mail</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($prods as $prod)
            <tr>
                <td><a class="product-name" href="{{ route('usuarios.view', $usr->id) }}">{{ $usr->name }}</a></td>
                <td>R$ {{ number_format($prod->price, 2, ',', '.') }}</td>
                <td>{{ $usr->quantity }}</td>
                <td><a href="{{ route('usuarios.edit', $prod->id) }}" class="btn btn-primary"><i
                            class="fas fa-pen-square" style="color: #ff0080;"></i></a></td>
                <td>
                    <form action="{{ route('usuarios.delete', $prod->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger"><i class="fas fa-trash"
                                style="color: #ff0080;"></i></button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $prods->links('vendor.pagination.default')}}

</div>

<a href="{{ route('produtos.add') }}" class="add-button">Adicionar produto</a>
@endsection
<style>
    body {
        background-color: #F5F5F5;
        font-family: Arial, sans-serif;
        color: #333;
    }

    .success-message {
        text-transform: uppercase;
        text-align: center;
        background-color: #DFF0D8;
        border: 1px solid #3C763D;
        color: #3C763D;
        padding: 10px;
        margin-bottom: 10px;
    }

    .search-container {
        text-align: center;
        margin-bottom: 20px;
    }

    .search-input {
        padding: 10px;
        font-size: 16px;
        border: 1px solid #ccc;
        border-radius: 4px;
        width: 300px;
        max-width: 100%;
    }

    .search-input2 {
        padding: 6px;
        font-size: 16px;
        border: 1px solid #ccc;
        border-radius: 4px;
        width: 200px;
        max-width: 100%;
    }

    .search-button {
        background-color: #ff0080;
        color: #FFF;
        border: none;
        padding: 10px 20px;
        margin-left: 10px;
        border-radius: 4px;
        cursor: pointer;
    }

    .search-button i {
        margin-right: 5px;
    }

    .table-container {
        text-transform: uppercase;
        margin: 20px auto;
        width: 80%;
        background-color: rgb(255, 255, 255);
        border: 1px solid rgb(255, 143, 188);
        border-radius: 4px;
        padding: 20px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .product-table {
        text-transform: uppercase;
        width: 100%;
    }

    .product-table th {
        text-transform: uppercase;
        background-color: #F2F2F2;
        padding: 10px;
        text-align: left;
    }

    .product-table td {
        text-transform: uppercase;
        padding: 10px;
    }

    .product-name {
        text-transform: uppercase;
        color: #000000;
        text-decoration: none;
    }

    .add-button {
        text-transform: uppercase;
        display: inline-block;
        padding: 10px 20px;
        margin-top: 20px;
        background-color: #ff07c9;
        color: #FFF;
        text-decoration: none;
        border-radius: 4px;
    }
</style>
