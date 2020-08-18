@extends('principal')

@section('content')
    <h1>Detalhes</h1>

    <ul>
        <li>
            <b>Valor:</b> R$ {{ $produto->valor }}
        </li>

        <li>
            <b>Descricao:</b> {{ $produto->descricao }}
        </li>

        <li>
            <b>Quantidade em Estoque:</b> {{ $produto->quantidade }}
        </li>

    </ul>
@endsection
