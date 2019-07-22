<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto;
class ProdutoController extends Controller
{
    //para fazer paginação de produtos
    public function listarTodos(Request $request){
        $produtos = new Produto();
        //aqui aparece os produtos que a gente quer, por exemplo de dez em dez
        $listarProdutos = $produtos->paginate(10);

        // ou o outro jeito de fazer
        // $listarProdutos = Produto::all();

        //aqui nós vamos enviar as informações coletadas na linha de cima e retornar na view
return view('produtos', ['produtos'=>$listarProdutos]);
    }
}
