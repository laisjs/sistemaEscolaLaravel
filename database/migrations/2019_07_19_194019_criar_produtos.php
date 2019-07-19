<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriarProdutos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    //o método uop vem da classe migratuon, toda classe a partir dela faz esse método, mas ela faz diferente pra cada
    // situação, ous eja polimorfismo
    {
         //método create espera dois parâmetros('produtos'= nome da tabela)
         Schema::create('produtos', function(Blueprint $table){
            $table->bigIncrements('id');
            $table->string('nome_produto');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       
    }
}
