<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create(['name'=>'Electronica']);
        Category::create(['name'=>'Electrodomesticos']);
        Category::create(['name'=>'Libros']);
        Category::create(['name'=>'juguetes']);
    }


		

}
