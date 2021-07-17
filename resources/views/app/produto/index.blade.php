@extends('app.layouts.basico')

@section('titulo', 'Produto')

@section('conteudo')
    <div class="conteudo-pagina">
        <div class="titulo-pagina-app">
            <p>Listar produtos</p>
        </div>

        @component('app.produto._components.menu')
        @endcomponent

        <div class="informacao-pagina">
            <div style="max-width: 750px; margin: auto;">
                <table border="1" width="100%">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Descrição</th>
                            <th>Peso</th>
                            <th>Unidade ID</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <p>
                        Listando {{ $produtos->count() }} de {{ $produtos->total() }} registros |
                        De {{ $produtos->firstItem() }} a {{ $produtos->lastItem() }}
                    </p>
                    <tbody>
                        @foreach ($produtos as $produto )
                            <tr>
                                <th>{{ $produto->nome }}</th>
                                <th>{{ $produto->descricao }}</th>
                                <th>{{ $produto->peso }}</th>
                                <th>{{ $produto->unidade_id }}</th>
                                <th><a href="{{ route('produto.update', $produto->id) }}">Editar</a></th>
                                <th><a href="{{ route('produto.destroy', $produto->id)}}">Excluir</a></th>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $produtos->appends($request->all())->links() }}
            </div>
        </div>
    </div>
@endsection
