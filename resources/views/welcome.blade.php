{{-- resources/views/welcome.blade.php --}}
@extends('includes.base')

@section('title', 'Página legal')

@section('content')
<div class="container">
    <h2>Tudo que você precisa está aqui</h2>
    <p>Navegue pelo site! Agora!</p>
</div>
@endsection
<style>
    body {
        background-color: #F5F5F5;
        font-family: Arial, sans-serif;
        color: #333;
        padding: 20px;
    }

    .container {
        margin: 0 auto;
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

    p {
        margin-bottom: 10px;
    }
</style>
