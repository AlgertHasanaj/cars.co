<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles')->truncate(); // Opsionale: fshin të dhënat ekzistuese

        DB::table('articles')->insert([
            [
                'title' => 'Volkswagen Beetle',
                'content' => 'The Volkswagen Beetle, officially the Volkswagen Type 1,[a] is a small car produced by the German company Volkswagen from 1938 to 2003.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Ford Mustang',
                'content' => 'The Ford Mustang is an American car manufactured by Ford. It was originally conceived by Lee Iacocca.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Porsche 911',
                'content' => 'The Porsche 911 is a high-performance rear-engine sports car introduced in September 1964 by Porsche AG of Stuttgart, Germany.',
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ]);
    }
}
