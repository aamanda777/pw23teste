{{-- views/produtos/add.blade.php --}}
@extends('includes.base')

@section('title', 'Produtos - Adicionar')

@section('content')
<div class="container">
    <h2>Adicione seu produto</h2>

@if ($errors)
    <div class="alert alert-danger">
        @foreach ($errors->all() as $err)
            {{ $err }}<br>
        @endforeach
    </div>
@endif

<form action="{{ url()->current() }}" method="post">
    @csrf
    <div class="form-group">
        <label for="name">Nome do produto</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Nome do produto" value="{{ old('name', $prod->name ?? '') }}">
    </div>
    <div class="form-group">
        <label for="price">Preço</label>
        <input type="number" class="form-control" id="price" name="price" step="0.01" placeholder="Preço" min="0" value="{{ old('price', $prod->price ?? '') }}">
    </div>
    <div class="form-group">
        <label for="quantity">Quantidade</label>
        <input type="number" class="form-control" id="quantity" name="quantity" placeholder="Quantidade" min="0" value="{{ old('quantity', $prod->quantity ?? '') }}">
    </div>
    <hr>
    <button type="submit" class="btn btn-primary">Gravar</button>
</form>

</div>
@endsection
<style>
    body {
        background-color: #F5F5F5;
        font-family: Arial, sans-serif;
        color: #333;
    }

    .container {
        margin: 20px auto;
        width: 80%;
        background-color: #FFF;
        border: 1px solid #DDD;
        border-radius: 4px;
        padding: 20px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    h2 {
        color: #333;
        font-size: 24px;
        margin-bottom: 20px;
    }

    .alert {
        background-color: #F8D7DA;
        border: 1px solid #D6D6D6;
        color: #721C24;
        padding: 10px;
        margin-bottom: 10px;
    }

    .form-group {
        margin-bottom: 20px;
    }

    label {
        font-weight: bold;
        margin-bottom: 5px;
    }

    .form-control {
        width: 100%;
        padding: 10px;
        font-size: 16px;
        border-radius: 4px;
        border: 1px solid #DDD;
    }

    .btn-primary {
        padding: 10px 20px;
        font-size: 16px;
        background-color: #007BFF;
        border-color: #007BFF;
        color: #FFF;
        border-radius: 4px;
    }
</style>
