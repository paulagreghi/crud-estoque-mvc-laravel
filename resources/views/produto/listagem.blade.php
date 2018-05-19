@extends('layout.principal')
@section('conteudo')

  @if(empty($produtos))
  <div>
    Não há produto cadastrado!
  </div>

  @else
  <h1>Lista de Produtos</h1>
    <table class="table table-striped table-hover">
      <tr align="center">
        <th>Produto</th>
        <th>Quantidade em estoque</th>
        <th>Preço Unitário</th>
        <th>Visualizar</th>
        <th>Alterar</th>
        <th>Excluir</th>
      </tr>
      @foreach ($produtos as $p)
      <tr align="center">
        <td>{{ $p->nome }}</td>
        <td>{{ $p->estoque }}</td>
        <td>R${{ $p->preco }}</td>
        <td>
          <a href="http://localhost/arq/public/produtos/mostra/{{ $p->id }}">
            <!--<button type="button" class="btn btn-success">Visualizar</button>-->
            <i class="fas fa-binoculars"></i>
          </a>
        </td>
        <td>
          <a href="{{action('ProdutoController@edit', $p->id)}}">
            <!--<button type="button" class="btn btn-info">Alterar</button>-->
            <i class="fas fa-edit"></i>
          </a>
        </td>
        <td>
          <a href="{{action('ProdutoController@remove', $p->id)}}">
            <!--<button type="button" class="btn btn-danger">Excluir</button>-->
            <i class="fas fa-trash"></i>
          </a>
        </td>
      </tr>
      @endforeach
    </table>
  @endif


  @if(old('nome'))
  <div class="alert alert-success">
    O produto {{old('nome')}} foi adicionado
  </div>
  @endif
@stop
