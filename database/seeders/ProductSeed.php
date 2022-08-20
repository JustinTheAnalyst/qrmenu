<?php

namespace Database\Seeders;

use App\Models\ProductModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProductModel::factory()->count(10)->create();


        // DB::table("products")->insert([
        //     "name" => "Test Product",
        //     "content" => "test content",
        //     "created_at" => now(),
        //     "updated_at" => now()
        // ]);
    }
}
