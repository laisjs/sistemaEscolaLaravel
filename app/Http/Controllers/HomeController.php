<?php
//todos os constrollers ficam dentro na  namespace
namespace App\Http\Controllers;
//use=padrão do larável, aqui não precisa fazer request once. Então aqui ele ta falando eu quero usar a classe
//request que ta dentro de illuminate e http. Então eu preciso falar que eu quero receber o objeto que é da classe request
use Illuminate\Http\Request;
//aqui ele cria automaticamente a classe HomeController que extende de Controller
class HomeController extends Controller
{
//6. ai aqui passa a função para que quando o cara digitar home o controller faz aparecer a view
//7. home(Request $request) eu to falando que eu vou receber o objeto $request da classe request, ou seja
//informações de super globais como por exemplo $_POST, é por meio dele que a gente trabalha com várias solicitações. 
//além do objeto request ele precisa receber $id que vem do rotas  
public function home(Request $request, $id){
    //8. O objeto $request tem um método chamado IsMethod que pergunta se o método é GET
    if($request->isMethod('GET')){
    //para passar mais de uma informação pra view pode ser assim:
        $idade=21;
              return view('home',['id'=>$id, 'idade'=>$idade]);
    }
      
   } 
}

