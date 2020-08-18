@extends('principal')

@section('content')
    <form action="/produtos/store/{{$produto->id}}" method="post">
        @csrf
        <div class="form-group">
            <label for="nome">Nome</label>
        <input  name="nome" class="form-control" value="{{$produto->nome}}">
        </div>
        <div class="form-group">
            <label for="descricao">Descrição</label>
            <input  name="descricao" class="form-control" value="{{$produto->descricao}}">
        </div>
        <div class="form-group">
            <label for="valoe">Valor</label>
            <input  name="valor" class="form-control" value="{{$produto->valor}}">
        </div>
        <div class="form-group">
            <label for="quantidade">Quantidade</label>
            <input  name="quantidade" class="form-control" type="number" value="{{$produto->quantidade}}"> 
        </div>
        <input type="submit" class="btn btn-primary" value="Enviar">
    </form>
@endsection
