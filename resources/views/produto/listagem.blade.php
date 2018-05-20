@extends('layout/principal')

@section('conteudo')   
<h1 class="meio">LISTAGEM DE PRODUTOS</h1>

@if (session('adicionou') == true)
    <div class="alert alert-success">
        <h4 class="meio">PRODUTO ADICIONADO COM SUCESSO!!!</h4>
    </div>
@endif
<table class="table table-bordered table-stripped">
    <thead class="thead-dark">
        <th>NOME</th>
        <th>VALOR</th>
        <th>DESCRIÇÃO</th>
        <th>QUANTIDADE</th>
        <th></th>
    </thead>
    <tbody>
        @foreach ($produtos as $p)
            <tr>
                <td>{{$p->nome}}</td>
                <td>R$ {{$p->valor}}</td>
                <td>{{$p->descricao}}</td>
                <td>@if ($p->quantidade == 0) Estoque zerado @else {{$p->quantidade}} @endif</td>
                <td class="meio">
                    <a href="/produtos/mostra/{{$p->id}}">
                        Visualizar
                    </a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@stop