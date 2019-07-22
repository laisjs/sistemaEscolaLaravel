<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        // database seeders na hora que vc rodar o db:seeders você vai chamar a seeder CriarProduto
        // e aí tem que colocar o comando no terminal: php artisan db:seed
        $this->call(CriarProdutoSeeder::class);
    }
}
