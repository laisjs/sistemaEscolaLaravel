<?php

use Illuminate\Database\Seeder;
//chama o arquivo onde  a classe Produto foi criada
use App\Produto;

class CriarProdutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    
    public function run()
    {
        //  COM OBJETO - ISSO É ESCREVER NA MÃO E CONTROLAR OS DADOS
        $produto = new Produto();
        $produto->nome_produto = "Produto teste";
        $produto->id_categoria = 1;
        $produto->save();

        // COM ARRAY ASSOCIATIVO
// Produto::create([
//     "nome_produto"=>"Produto teste";
//     "id_categoria"=>2;
// ])

 //  AQUI É PRA GERAR DADOS FICTÍCIOS ALEATÓRIOS
// eu quero que vc gere da produto class 20 itens.
factory(Produto::class, 20)->create();
//precisa rodar o seeders no terminal 

    }
}

