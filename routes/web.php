<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// Existe uma classe chamada Route dentro do larável. Eu quero que vc na minha classe route 
// eu quero que você entre no método get. Se eu quiser criar uma rota POST: 

// Route::post('/', function () {
//     return view('welcome');
// });

// 1. Existe uma classe chamada Route dentro do larável. Eu quero que vc na minha classe route 
// entre no método get. Se o cara digitar '/' eu quero que vc execute essa função anônima que 
// retorna uma view chamada welcome que está dentro da pasta resource que tem um arquivo welcome.blade.php

//aqui quer dizer que o cara só digitou o site
Route::get('/', function () {
    return view('welcome');
});

// 3. exemplo Essa rota vai ser via get, ou seja, o cara vai escrever via url 
// // e quando ele digitar /home eu quero que retorne a view que tem o nome 'home'
//Aqui a gente retorna uma view direto das rotas
// Route::get('/home', function(){
//    return view('home');
// });

//4. Aqui linka uma rota a um controller Route::get('/contato', 'contatoController@listarcontatos');
Route::get('/contato', 'contatoController@listarcontatos');


//5. Toda vez que a pessoa digitar home, vai chamar o controller.[Aqui é uma rota com parâmetro ID]
//aqui é obrigatório a pessoa digitar home/id
Route::get('/home/{id}', 'HomeController@home');
//Ai vamos no controller criado HomeController@home
//9.Aqui vai chamar o controller Aluno que tem o método cadastrarAluno
Route::get('/aluno/cadastro', 'AlunoController@cadastrarAluno');
//10. Aqui só muda o método
Route::post('/aluno/cadastro', 'AlunoController@cadastrarAluno');

//exercício
Route::get('/aluno', 'AlunoController@listarAluno');

//para deletar o aluno
Route::get('/aluno/deletar/{id}', 'AlunoController@deletarAluno');

//tem todas as funcionalidade de todas as rotas que precisamos para autenticar
Auth::routes();
//nessa rota home é o que da início a quase tudo.
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/produtos', 'ProdutoController@listarTodos');