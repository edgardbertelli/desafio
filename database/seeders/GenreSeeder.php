<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('genres')->insert([
            'name' => 'Romance'
        ]);

        DB::table('genres')->insert([
            'name' => 'Auto-ajuda'
        ]);

        DB::table('genres')->insert([
            'name' => 'Poesia'
        ]);

        DB::table('genres')->insert([
            'name' => 'Filosofia'
        ]);
    }
}
