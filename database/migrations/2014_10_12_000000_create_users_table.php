<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            // Blueprint, recebe tudo que a gente escreve em php ela transforma em sql
            // quero criar no schema(bancodedados) uma tabela 
            
            //eu quero que crie um atributo chamado id(nome da coluna) com bigIncrements que significa
            // que vai transformar o campo em primarykey
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            //é o json um rash que o larável gera, toda vez que vc tica remember, vai gerar um hash uma criptografia
            // ele vai colocar esses códigos nos cookies do computador(controle de login);
            $table->rememberToken();
            //vai criar duas colunas create e update para ter o controle de atualização (padrão do larável)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    //se existir uma tabela users ele vai rodar o down. 
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
