<?php 
namespace estoque\Http\Controllers;

use Validator;
use DB;
use Request;
use estoque\Produto;
use estoque\Http\Requests\ProdutoRequest;

class ProdutoController extends Controller {

    public function lista()
    {
        $produtos = Produto::all();        
        return view('produto.listagem')->withProdutos($produtos);
    }

     public function mostra($id)
     {
       $produto = Produto::find($id);
         if(empty($produto)) return "Esse produto não existe";
            
         return view('produto.detalhes')->with('p',$produto);
     }

     public function novo()
     {
         return view('produto.formulario');
     }

     public function adiciona(ProdutoRequest $request)
     {
         Produto::create($request->all());
         return redirect()
                ->action('ProdutoController@lista')
                ->withInput(Request::only('nome'));
     }
     
     public function edita($id)
     {
         $produto = Produto::find($id);
         return view('produto.formulario')
                ->with('produto', $produto);
     }

     public function altera($id, ProdutoRequest $request)
     {
         $parametros = $request->except(['_token']);
         $produto = Produto::find($id);
         $produto->update($parametros);
        
         return redirect()
                ->action('ProdutoController@lista')
                ->withInput(Request::only('nome'));
     }
     
     public function remove($id)
     {
         $produto = Produto::find($id);
         $produto->delete();
         return redirect()->action('ProdutoController@lista');
     }
}