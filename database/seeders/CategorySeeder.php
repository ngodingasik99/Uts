<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Str;

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
            'name' => 'Baju',
            'description' => 'Bahan bagus',
            'foto' => Str::random(20),
            'created_at' => now(),
            'updated_at' => now(),            
        ]);

        DB::table('categories')->insert([
            'name' => 'Celana',
            'description' => 'Bahan bagus',
            'foto' => Str::random(20),
            'created_at' => now(),
            'updated_at' => now(),            
        ]);
    }
}
