<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
           'name' => 'Televizor',
        ]);
        Category::create([
            'name' => 'Kompyuter mahsulotlari',
        ]);
        Category::create([
            'name' => 'Notebook',
        ]);
        Category::create([
            'name' => 'Smartfon',
        ]);
        Category::create([
            'name' => 'Go\'zallik va salomatlik' ,
        ]);
        Category::create([
            'name' => 'Mebellar',
        ]);
        Category::create([
            'name' => 'Kitoblar',
        ]);
    }
}
