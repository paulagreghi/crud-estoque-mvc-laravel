@extends('layout.principal')
@section('conteudo')

<style>
    footer {
	  position: absolute;
	}
</style>

<h1>{{$action or 'Inserir Produto'}}</h1>
@if (count($errors) > 0)
<div class="alert alert-danger">
<ul>
 @foreach ($errors->all() as $error)
 <li>{{ $error }}</li>
 @endforeach
</ul>
</div>
@endif


<form action="{{ isset($action) ? action('ProdutoController@update',$produto->id) : action('ProdutoController@adiciona') }}" method="post">
  <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
  <div class="form-group">
    <label>Nome</label>
    <input name="nome" class="form-control" value="{{$produto->nome or old('nome')}}">
  </div>
  <div class="form-group">
    <label>Estoque</label>
    <input name="estoque" class="form-control" value="{{$produto->estoque or old('estoque')}}">
  </div>
  <div class="form-group">
    <label>Preço Unitário</label>
    <input name="preco" class="form-control" value="{{$produto->preco or old('preco')}}">
  </div>
<div class="text-center">
  <div class="button-group">
    <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i></button>

    <a href="{{ action('ProdutoController@lista') }}">
      <button type="button" class="btn btn-info"><i class="fas fa-chevron-left"></i></button>

    </a>
  </div>
</div>
</form>


@stop
