<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Produto;
use Faker\Generator as Faker;

// onde ta escrito model precisa substituir para o nome do Produto
$factory->define(Produto::class, function (Faker $faker) {
    return [
        // ele gera o name que ja vem com a classe faker
        "nome_produto"=>$faker->name,
        //ele gera um digito aleatório
        "id_categoria"=>$faker->randomDigit
        //depois volta la pra seeder de produtos
    ];
});
