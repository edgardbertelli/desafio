<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => 'Desenvolvimento'
        ]);

        DB::table('categories')->insert([
            'name' => 'Negócios'
        ]);

        DB::table('categories')->insert([
            'name' => 'Finanças e contabilidade'
        ]);

        DB::table('categories')->insert([
            'name' => 'TI e software'
        ]);

        DB::table('categories')->insert([
            'name' => 'Produtividade no escritório'
        ]);

        DB::table('categories')->insert([
            'name' => 'Desenvolvimento pessoal'
        ]);

        DB::table('categories')->insert([
            'name' => 'Design'
        ]);

        DB::table('categories')->insert([
            'name' => 'Marketing'
        ]);

        DB::table('categories')->insert([
            'name' => 'Estilo de vida'
        ]);

        DB::table('categories')->insert([
            'name' => 'Fotografia e vídeo'
        ]);

        DB::table('categories')->insert([
            'name' => 'Saúde e fitness'
        ]);

        DB::table('categories')->insert([
            'name' => 'Música'
        ]);

        DB::table('categories')->insert([
            'name' => 'Ensino e estudo acadêmico'
        ]);
    }
}
