@extends('principal')

@section('content')
    @empty($produtos)
        <div class="alert alert-danger">
            Você Não tem nenhum produto cadastrado
        </div>
    @endempty

    <h1 class="text-center">Listagem de produtos</h1>

    <table class="table table-striped table-bordered">
        @foreach ($produtos as $p)
            <tr class="{{ $p->quantidade <= 1 ? 'table-danger' : '' }}">
                <td>{{ $p->nome }}</td>
                <td>{{ $p->valor }}</td>
                <td>{{ $p->descricao }}</td>
                <td>{{ $p->quantidade }}</td>
                <td>
                    <a href="/produtos/mostra/{{ $p->id }}">
                        <i class="fa fa-eye" aria-hidden="true"></i>
                    </a>
                </td>

                <td>
                    <a href="/produtos/remove/{{ $p->id }}">
                        <i class="fa fa-trash" aria-hidden="true"></i>
                        </i>
                    </a>
                </td>

                <td>
                    <a href="/produtos/editar/{{ $p->id }}">
                        <i class="fa fa-pencil" aria-hidden="true"></i>
                    </a>
                </td>
                

            </tr>
        @endforeach
    </table>
    
    <h4>
        <div class="alert alert-danger">
            Um ou menos itens no estoque
        </div>
    </h4>
    

    @if (old('nome'))
        <div class="alert alert-success">
            <strong>Successo!!</strong> O produto {{ old('nome') }} foi adiciondo.
        </div>
    @endif

@endsection
