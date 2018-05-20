@extends('layout/principal')

@section('conteudo')
<h1 class="meio">DETALHES DO PRODUTO "{{$p->nome}}"</h1>

<ul class="list-group">
    <li class="list-group-item active">{{$p->nome}}</li>
    <li class="list-group-item">VALOR: R$ {{$p->valor}}</li>
    <li class="list-group-item">DESCRIÇÃO: {{$p->descricao}}</li>
    <li class="list-group-item">QUANTIDADE: @if ($p->quantidade == 0) ESTOQUE VAZIO @else {{$p->quantidade}} @endif</li>
</ul>
@stop