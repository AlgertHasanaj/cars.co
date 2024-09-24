<?php

namespace Database\Seeders;

use App\Models\whyUs;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class whyUsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    public function run()
    {
        whyUs::create([
            'title' => 'My First Post',
            'content' => 'This is the content of my first post.'
        ]);
    }
}
