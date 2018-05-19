@extends('layout.principal')

@section('conteudo')
<style>
    footer {
	  position: absolute;
	}
</style>

<h1>Detalhes do Produto: {{ $p->nome }}</h1>
  <ul>
    <li>
      Quantidade em estoque: {{ $p->estoque }}
    </li>
    <li>
      Preço Unitário: R${{ $p->preco }}
    </li>
  </ul>
  <div class="text-center">
    <div class="button-group">
      <a href="{{ action('ProdutoController@lista') }}">
        <button type="button" class="btn btn-info"><i class="fas fa-chevron-left"></i></button>

      </a>
    </div>
  </div>
@stop
