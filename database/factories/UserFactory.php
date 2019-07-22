<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\User;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

// fala pro larável como ele pode inserir informações aleatórias dentro de uma tabela
// User - model Faker = classe (uma biblioteca grande, tem vários nomes diferentes)
$factory->define(User::class, function (Faker $faker) {
    return [
        //no campo name vai pegar um nome que o faker gerar
        'name' => $faker->name,
        //eu quero que gere um unico email, o unique garante que ele nunca gere um email repetido e o safeemal, um email valido
        'email' => $faker->unique()->safeEmail,
        //ele pega a data do dia de hoje e cadastra na coluna
        'email_verified_at' => now(),
        //aqui pode colocar um hash 'password'=>Hash::make(str::random(10)),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),
    ];
});
