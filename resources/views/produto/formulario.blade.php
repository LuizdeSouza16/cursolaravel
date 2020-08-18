@extends('principal')

@section('content')
    @if (count($errors)  > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="/produtos/adiciona" method="post">
        @csrf
        <div class="form-group">
            <label for="nome">Nome</label>
            <input name="nome" class="form-control">
        </div>
        <div class="form-group">
            <label for="descricao">Descrição</label>
            <input name="descricao" class="form-control">
        </div>
        <div class="form-group">
            <label for="valoe">Valor</label>
            <input name="valor" class="form-control">
        </div>
        <div class="form-group">
            <label for="quantidade">Quantidade</label>
            <input name="quantidade" class="form-control" type="number">
        </div>
        <input type="submit" class="btn btn-primary" value="Enviar">
    </form>
@endsection
