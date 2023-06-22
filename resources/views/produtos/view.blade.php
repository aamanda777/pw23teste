{{-- views/produtos/view.blade.php --}}
@extends('includes.base')

@section('title', 'Produtos - Ver')

@section('content')
<div class="container">
    <h2>{{ $prod->name }}</h2>
    <p>Preço: R$ {{ number_format($prod->price, 2, ',', '.') }}</p>
    <p>Quantidade: {{ $prod->quantity }}</p>
<p>
    <a class="linkzinho" href="{{ route('produtos') }}">Voltar</a>
</p>

</div>
@endsection
<style>
    body {
        background-color: #F5F5F5;
        font-family: Arial, sans-serif;
        color: #333;
    }

    .container {
        text-transform: uppercase;
        margin: 20px auto;
        width: 80%;
        background-color: #FFF;
        border: 1px solid #DDD;
        border-radius: 4px;
        padding: 20px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    h2 {
        text-transform: uppercase;
        color: #333;
        font-size: 24px;
        margin-bottom: 20px;
    }

    p {
        text-transform: uppercase;
        margin-bottom: 10px;
    }

    .linkzinho {
        text-transform: uppercase;
        color: #f500a3;
        text-decoration: none;
    }
</style>
