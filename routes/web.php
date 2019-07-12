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

Route::get('/', function () {
    return view('welcome');
});

// 1. exemplo Essa rota vai ser via get, ou seja, o cara vai escrever via url 
// // e quando ele digitar /home eu quero que retorne a view que tem o nome 'home'

Route::get('/home', function(){
   return view('home');
});

//2. Aqui cria um controller 
Route::get('/contato', 'contatoController@listarcontatos');