<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
// // aqui extende de Model
// o model vai representar uma tabela dentro do banco de dados, cada tabela vai ter um model. Exemplo se tem 
// a tabela aluno, vai ter um model para aluno. Se tiver professor vai ter um model separado. 


class Aluno extends Model
 {
    public $timestamps = false;

}

//IMPORTANTE - CONFIGURAÇÃO DO LARÁVEL 
// Caso o nome da  minha tabela esteja no singular, vou precisar configurar o laravel conforme abaixo com os meus poadrões
// class Alunos extends Model{
//     private $table = 'aluno';
//se o nome da sua tabela não for só ID vc tem que especificar
//     private $primaryKey = "aluno_id";
//toda tabela q vc criou e quando o dado foi atualizado
//timestamps é coluna de atualização
// }