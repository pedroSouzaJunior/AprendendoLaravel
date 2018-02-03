@extends('layout.principal')
@section('conteudo')

@if(count($errors) > 0)
<div class="alert alert-danger">
  <ul>
    @foreach($errors->all() as $error)
      <li>{{$error}}</li>
    @endforeach
  </ul>
</div>
@endif
<h1>Novo produto</h1>

<form action="{{empty($produto) ? action('ProdutoController@adiciona') : action('ProdutoController@altera', $produto->id)}}" method="{{empty($produto) ? 'post' : 'put'}}">
<input type="hidden" name="_token" value="{{{ csrf_token() }}}" />

  <div class="form-group">
    <label>Nome</label>
    <input name="nome" value="{{$produto->nome or ''}}" class="form-control">
  </div>
  <div class="form-group">
    <label>Valor</label>
    <input name="valor" value="{{$produto->valor or ''}}" class="form-control">
  </div>
  <div class="form-group">
    <label>Quantidade</label>
    <input type="number" name="quantidade" value="{{$produto->quantidade or ''}}" class="form-control">
  </div>
  <div class="form-group">
    <label>Descrição</label>
    <input name="descricao" value="{{$produto->descricao or ''}}" class="form-control">
  </div>
  <div class="form-group">
    <label>Tamanho</label>
    <input name="tamanho" value="{{$produto->tamanho or ''}}" class="form-control" />
  </div>
  <button class="btn btn-primary btn-block" type="submit">{{empty($produto) ? 'Adicionar' : 'Editar'}}</button>
</form>
@stop
