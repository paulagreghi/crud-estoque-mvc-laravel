<?php

namespace arq\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\DB;
use Request;
use arq\Produto;
use arq\Http\Requests\ProdutosRequest;


class ProdutoController extends BaseController
{
    public function integrantes(){
      return view('layout.integrantes');
    }

    public function lista()
    {
      $produtos = Produto::all();
      return view('produto.listagem')->withProdutos($produtos);
    }

    public function mostra($id)
    {
      //$id = Request::route('id');
      $produtos = Produto::find($id);
      if(empty($produtos)){
        return "Produto não encontrado";
      }
      return view('produto.detalhes')->with('p', $produtos);
    }

    public function novo(){
      return view('produto.formulario');
    }

    public function adiciona(ProdutosRequest $request){
      Produto::create($request->all());
      return redirect()->action('ProdutoController@lista')->withInput(Request::only('nome'));
    }

    public function listaJson(){
      $produtos = Produto::all();
      return response()->json($produtos);
    }

    public function remove($id){
      $produtos = Produto::find($id);
      $produtos->delete();
      return redirect()->action('ProdutoController@lista');
    }

    public function edit($id)
    {
        $produto = Produto::find($id);
        return view('produto.formularioe',compact('produto'));
    }

    public function update(ProdutosRequest $request, $id)
    {
        $produto = Produto::find($id);
        $produto->nome    = $request->nome;
        $produto->estoque = $request->estoque;
        $produto->preco   = $request->preco;

        $produto->update();
        return redirect()->action('ProdutoController@lista')->with('message', 'Product updated successfully!');
    }

}
