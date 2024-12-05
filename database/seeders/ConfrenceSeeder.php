<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Confrence;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ConfrenceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Confrence::factory()->count(50)->create();
    }
}
