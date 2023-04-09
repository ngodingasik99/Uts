<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name' => 'Celana Jeans',
            'price' => 50000,
            'description' => 'Bahan bagus, tahan lama',
            'category_id' => 2,
            'foto' => Str::random(20),
            'created_at' => now(),
            'updated_at' => now(),            
        ]);

        DB::table('products')->insert([
            'name' => 'Celana Drawstring',
            'price' => 100000,
            'description' => 'Celana drawstring sangat khas dengan detail tali di bagian pinggang, fungsinya untuk membuat celana lebih erat di pinggang.',
            'category_id' => 2,
            'foto' => Str::random(20),
            'created_at' => now(),
            'updated_at' => now(),            
        ]);

        DB::table('products')->insert([
            'name' => 'Celana Cargo',
            'price' => 50000,
            'description' => 'Celana ini akan memberi kesan yang unik.',
            'category_id' => 2,
            'foto' => Str::random(20),
            'created_at' => now(),
            'updated_at' => now(),            
        ]);

        DB::table('products')->insert([
            'name' => 'Celana Formal',
            'price' => 50000,
            'description' => 'Celana formal adalah fashion item yang wajib ada di lemarimu, apalagi jika kamu pria yang bekerja di sebuah lembaga formal.',
            'category_id' => 2,
            'foto' => Str::random(20),
            'created_at' => now(),
            'updated_at' => now(),            
        ]);

        DB::table('products')->insert([
            'name' => 'Celana Chino',
            'price' => 100000,
            'description' => 'Karakteristik dari celana chino adalah potongan celananya makin mengecil di bagian ujung, sehingga membuat siluet kaki lebih tinggi.',
            'category_id' => 2,
            'foto' => Str::random(20),
            'created_at' => now(),
            'updated_at' => now(),            
        ]);

        DB::table('products')->insert([
            'name' => 'Celana Skinny',
            'price' => 50000,
            'description' => 'Jika celana chino meruncing di bagian ujungnya, maka celana skinny atau slim fit pun sama, tapi lebih ketat lagi.',
            'category_id' => 2,
            'foto' => Str::random(20),
            'created_at' => now(),
            'updated_at' => now(),            
        ]);

        DB::table('products')->insert([
            'name' => 'Jaket',
            'price' => 100000,
            'description' => 'Bahan tebal.',
            'category_id' => 1,
            'foto' => Str::random(20),
            'created_at' => now(),
            'updated_at' => now(),            
        ]);

        DB::table('products')->insert([
            'name' => 'Kemeja Batik',
            'price' => 100000,
            'description' => 'Motif bagus, bahan lembut.',
            'category_id' => 1,
            'foto' => Str::random(20),
            'created_at' => now(),
            'updated_at' => now(),            
        ]);

        DB::table('products')->insert([
            'name' => 'Sweater',
            'price' => 100000,
            'description' => 'Hangat, kualitas bagus.',
            'category_id' => 1,
            'foto' => Str::random(20),
            'created_at' => now(),
            'updated_at' => now(),            
        ]);

        DB::table('products')->insert([
            'name' => 'T-shirt Genz',
            'price' => 50000,
            'description' => 'Bahan menyerap keringat.',
            'category_id' => 1,
            'foto' => Str::random(20),
            'created_at' => now(),
            'updated_at' => now(),            
        ]);

        DB::table('products')->insert([
            'name' => 'Jas Genz',
            'price' => 100000,
            'description' => 'Bahan kualitas bagus.',
            'category_id' => 1,
            'foto' => Str::random(20),
            'created_at' => now(),
            'updated_at' => now(),            
        ]);
    }
}
