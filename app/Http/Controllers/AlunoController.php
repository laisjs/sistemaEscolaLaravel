<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//larável usa da pasta raiz APP a classe aluno 
use App\Aluno;

class AlunoController extends Controller
{
//não esquecer de sempre colocar na função Request %request
    public function cadastrarAluno(Request $request){
        if($request->isMethod('GET')){
            return view('cadastroAluno');
            
        }
// PARA CRIAR UM NOVO ALUNO
        $novoAluno = new Aluno();
//SETAR AS INFORMAÇÕES DE ACORDO COM AS COLUNAS DO BANCO DE DADOS
// crio um objeto novoAluno que recebe a informação da coluna nome que tb recebe a informação do request do input nome
$novoAluno->nome = $request->nome;
$novoAluno->cpf = $request->cpf;
//agora eu já consigo descobrir se foi salvo ou não o aluno. 
$resultado = $novoAluno->save();

if ($resultado){
         return view('sucesso', ['erro'=>false, 'aluno'=>$novoAluno]);
}else{
         return view('sucesso', ['erro'=>true, 'aluno'=>$novoAluno]);
}

//aqui eu to passando a array
return view('sucesso', ['pessoas'=>$pessoas]);

 }




//aqui é pra listar os alunos
 public function listarAluno(Request $request){
    if($request->isMethod('GET')){
        $todos = Aluno::all();

        return view('listarAluno', ['alunos'=>$todos]);
    }
}

//aqui é pra deletar o aluno
public function deletarAluno(Request $request, $id){
    $alunos = Aluno::find($id);
    $alunos->delete();
    //pra ele imprimir a nova lista de alunos
    return redirect("/aluno");
    }





}











 //aqui estamos criando um novo objeto com os atributos nome e ra e os valores Lais e o numero do ra
//   $aluno=new Aluno();
//   $aluno->nome = "Lais";
//   $aluno->ra = "12345678910";      
// // para salvar dentro do banco:
// $aluno->save();




//se não entrar dentro do if automaticamente é um POST
//se eu quisesse imprimir o nome q eu to recebendo vindo do input
// $request->nome (nome é o nome do input que está na na blade cadastrar aluno)
//echo $request->nome;

//isso aqui é estático
// $pessoas= [
//     ["nome"=>"lais", "sobrenome"=>"oliveira"],
//     ["nome"=>"natalia", "sobrenome"=>"lira"]
// ];



// return view('sucesso', [
//     "nome"=>$request->nome,
//     "sobrenome"=>$request->sobrenome
//     ]);