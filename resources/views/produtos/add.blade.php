{{-- views/produtos/add.blade.php --}}
@extends('includes.base')

@section('title', 'Produtos - Adicionar')

@section('content')

<style>
    body {
        font-family: system-ui;
        padding: 20px;
    }

    .container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 80vh;
        margin-top: -5cm;
    }

    .form-container {
        padding: 2cm;
        border-radius: 10px;
        width: 60%;
    }

    .title {
        text-align: center;
        font-size: 2em;
        margin-bottom: 1em;
        font-family: system-ui;
        text-transform: uppercase;
        font-size: 30px;
    }

    .input-field {
        background-color: #ecf4f5;
        border: none;
        border-radius: 5px;
        padding: 12px;
        width: 100%;
        font-family: system-ui;
        color: rgb(0, 0, 0)
    }

    button {
        font-family: system-ui;
        margin: 20px auto;
        display: block;
        text-align: center;
        color: #fff;
        background-color: #ff009d;
        padding: 12px;
        text-decoration: none;
        border-radius: 4px;
        max-width: 200px;
        width: 100%;
    }

    #error-container {
        margin-bottom: 1em;
    }

    ul {
        font-weight: bold;
        font-size: 2em;
        margin-bottom: 1em;
        font-family: system-ui;
        text-transform: uppercase;
        font-size: 15px;
        color: #ff0000;
    }
</style>

    <h2>Adicione seu produto</h2>

    @if ($errors)
        @foreach ($errors->all() as $err)
            {{ $err }}<br>
        @endforeach
    @endif

    <form action="{{ url()->current() }}" method="post">

        @csrf
        <input type="text" name="name" placeholder="Nome do produto" value="{{ old('name', $prod->name ?? '') }}">
        <br>
        <input type="number" name="price" step="0.01" placeholder="Preço" min="0" value="{{ old('price', $prod->price ?? '') }}">
        <br>
        <input type="number" name="quantity" placeholder="Quantidade" min="0" value="{{ old('quantity', $prod->quantity ?? '') }}">
        <hr>
        <input type="submit" value="Gravar">
    </form>

    <script>
        window.addEventListener('DOMContentLoaded', function () {
            var errorContainer = document.getElementById('error-container');
            var errorMessages = document.getElementsByClassName('error-message');

            if (errorContainer && errorMessages.length > 0) {
                var errorMessageList = document.createElement('ul');

                for (var i = 0; i < errorMessages.length; i++) {
                    var errorMessage = errorMessages[i].value;
                    var listItem = document.createElement('li');
                    listItem.textContent = errorMessage;
                    errorMessageList.appendChild(listItem);
                }

                errorContainer.appendChild(errorMessageList);
            }
        });
    </script>

@endsection
