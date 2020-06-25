<?php

use Illuminate\Database\Seeder;

class CategoriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('categorias')->insert(array(
                 'descripcion'  => "Deportes",
                 'estatus'  => 1,
          ));
		\DB::table('categorias')->insert(array(
                 'descripcion'  => "Tecnología",
                 'estatus'  => 1,
          ));
		\DB::table('categorias')->insert(array(
                 'descripcion'  => "Arte",
                 'estatus'  => 1,
          ));
    }
}
