<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProdutoRequest;
use App\Produto;
use Illuminate\Support\Facades\Request;

class ProdutoController extends Controller
{

    public function lista()
    {
        $produtos = Produto::all();

        return view('produto.listagem', ['produtos' => $produtos]);
    }

    public function mostra($id) 
    {
        $produto = Produto::find($id);

        if (empty($produto)) {
            return "Esse produto não existe";
        }

        return view('produto.detalhes', ['produto' => $produto]);
    }

    public function novo()
    {
        return view('produto.formulario');
    }

    public function store($id)
    {
        $produto = Produto::find($id);
        $produto->nome = Request::input('nome');
        $produto->descricao = Request::input('descricao');
        $produto->valor = Request::input('valor');
        $produto->quantidade = Request::input('quantidade'); 
        
        $produto->save();

        return redirect()->action('ProdutoController@lista');
    }

    public function editar($id)
    {
        return view('produto.editar', ['produto' => Produto::find($id)]);
    }



    public function adiciona(ProdutoRequest $request)
    { 
        Produto::create($request->all());
        
        return redirect()
        ->action('ProdutoController@lista')
        ->withInput(Request::only('nome'));
    }

    public function remove($id) 
    {
        $produto = Produto::find($id);

        $produto->delete();

        return redirect()
            ->action('ProdutoController@lista');
    }

    public function listaJson() 
    {
        $produtos = Produto::all();

        return  response()->json($produtos) ;
    }
}
