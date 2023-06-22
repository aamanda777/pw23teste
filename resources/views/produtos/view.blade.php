{{-- views/produtos/view.blade.php --}}
@extends('includes.base')

@section('title', 'Produtos - Ver')

@section('content')
<style>
    body {
        padding: 20px;
    }

    h2 {
        font-family: system-ui;
        text-align: center;
        text-transform: uppercase;
        font-size: 28px;
        margin-bottom: 15px;
    }

    p {
        font-family: system-ui;
        text-align: center;
        font-size: 18px;
        margin-bottom: 10px;
    }

    .linkzinho {
        font-family: system-ui;
        margin: 30px auto;
        display: block;
        text-align: center;
        color: #fff;
        background-color: #9fd6ec;
        padding: 10px 16px;
        text-decoration: none;
        border-radius: 4px;
        transition: background-color 0.3s;
        max-width: 300px;
        width: 100%;
    }
</style>
    <h2>{{ $prod->name }}</h2>
    <p>Preço: R$ {{ number_format($prod->price, 2, ',', '.') }}</p>
    <p>Quantidade: {{ $prod->quantity }}</p>

    <p>
        <a href="{{ route('produtos') }}">Voltar</a>
    </p>
@endsection
