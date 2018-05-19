<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ProdutoTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::insert('insert into produtos
          (nome, estoque, preco)
          values (?, ?, ?)',
          array ('Caneta', 5, 1.29));

          DB::insert('insert into produtos
            (nome, estoque, preco)
            values (?, ?, ?)',
            array ('Lápis HB', 10, 0.50));
    }
}
