@extends('layout/principal')

@section('conteudo')
<h1 class="meio">ADICIONAR PRODUTOS</h1>
<form action="/produtos/adiciona" method="post">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="nome">NOME</label>
        <input type="text" name="nome" id="nome" class="form-control">
    </div>
    <br>
    <div class="form-group">
        <label for="valor">VALOR</label>
        <input type="number" name="valor" id="valor" class="form-control">
    </div>
    <br>
    <div class="form-group">
        <label for="descricao">DESCRIÇÃO</label>
        <input type="text" name="descricao" id="descricao" class="form-control">
    </div>
    <br>
    <div class="form-group">
        <label for="quantidade">QUANTIDADE</label>
        <input type="number" name="quantidade" id="quantidade" class="form-control">
    </div>
    <br>
    <div class="form-group">
        <input class="btn btn-primary totalwidth" type="submit" value="CADASTRAR">
    </div>
</form>
@stop