<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SubCategory::create([
            'name' => 'Artel',
            'slug' => 'televizor',
            'status' => 1,
            'category_id' => 1,
        ]);
        SubCategory::create([
            'name' => 'Shivaki',
            'slug' => 'televizor',
            'status' => 1,
            'category_id' => 1,
        ]);
        SubCategory::create([
            'name' => 'Sony',
            'slug' => 'televizor',
            'status' => 1,
            'category_id' => 1,
        ]);
        SubCategory::create([
            'name' => 'Samsung',
            'slug' => 'televizor',
            'status' => 1,
            'category_id' => 1,
        ]);
        SubCategory::create([
            'name' => 'LG',
            'slug' => 'televizor',
            'status' => 1,
            'category_id' => 1,
        ]);
        SubCategory::create([
            'name' => 'Toshiba',
            'slug' => 'televizor',
            'status' => 1,
            'category_id' => 1,
        ]);
        SubCategory::create([
            'name' => 'Monitorlar',
            'slug' => 'kompyuter',
            'status' => 1,
            'category_id' => 2,
        ]);

        SubCategory::create([
            'name' => 'Sichqonchalar',
            'slug' => 'kompyuter',
            'status' => 1,
            'category_id' => 2,
        ]);
        SubCategory::create([
            'name' => 'Klaviaturalar',
            'slug' => 'kompyuter',
            'status' => 1,
            'category_id' => 2,
        ]);
        SubCategory::create([
            'name' => 'HP',
            'slug' => 'noutbook',
            'status' => 1,
            'category_id' => 3,
        ]);

        SubCategory::create([
            'name' => 'Asus',
            'slug' => 'noutbook',
            'status' => 1,
            'category_id' => 3,
        ]);
        SubCategory::create([
            'name' => 'Apple',
            'slug' => 'noutbook',
            'status' => 1,
            'category_id' => 3,
        ]);
        SubCategory::create([
            'name' => 'Dell',
            'slug' => 'noutbook',
            'status' => 1,
            'category_id' => 3,
        ]);
        SubCategory::create([
            'name' => 'Acer',
            'slug' => 'noutbook',
            'status' => 1,
            'category_id' => 3,
        ]);
        SubCategory::create([
            'name' => 'Apple',
            'slug' => 'smartfon',
            'status' => 1,
            'category_id' => 4,
        ]);
        SubCategory::create([
            'name' => 'Samsung',
            'slug' => 'smartfon',
            'status' => 1,
            'category_id' => 4,
        ]);
        SubCategory::create([
            'name' => 'Xiaomi',
            'slug' => 'smartfon',
            'status' => 1,
            'category_id' => 4,
        ]);
        SubCategory::create([
            'name' => 'Realme',
            'slug' => 'smartfon',
            'status' => 1,
            'category_id' => 4,
        ]);
        SubCategory::create([
            'name' => 'Infinix',
            'slug' => 'smartfon',
            'status' => 1,
            'category_id' => 4,
        ]);
        SubCategory::create([
            'name' => 'OPPO',
            'slug' => 'smartfon',
            'status' => 1,
            'category_id' => 4,
        ]);
        SubCategory::create([
            'name' => 'Yuz uchun',
            'slug' => 'gozallik',
            'status' => 1,
            'category_id' => 5,
        ]);
        SubCategory::create([
            'name' => 'Tana parvarishi',
            'slug' => 'gozallik',
            'status' => 1,
            'category_id' => 5,
        ]);
        SubCategory::create([
            'name' => 'Oyoqlar uchun',
            'slug' => 'gozallik',
            'status' => 1,
            'category_id' => 5,
        ]);
        SubCategory::create([
            'name' => 'Soch uchun',
            'slug' => 'gozallik',
            'status' => 1,
            'category_id' => 5,
        ]);
        SubCategory::create([
            'name' => 'Qo\'l uchun',
            'slug' => 'gozallik',
            'status' => 1,
            'category_id' => 5,
        ]);
        SubCategory::create([
            'name' => 'Ofis mebellari',
            'slug' => 'mebel',
            'status' => 1,
            'category_id' => 6,
        ]);
        SubCategory::create([
            'name' => 'Uy uchun',
            'slug' => 'mebel',
            'status' => 1,
            'category_id' => 6,
        ]);
        SubCategory::create([
            'name' => 'Stollar',
            'slug' => 'mebel',
            'status' => 1,
            'category_id' => 6,
        ]);
        SubCategory::create([
            'name' => 'Divanlar',
            'slug' => 'mebel',
            'status' => 1,
            'category_id' => 6,
        ]);
        SubCategory::create([
            'name' => 'Javon',
            'slug' => 'mebel',
            'status' => 1,
            'category_id' => 6,
        ]);
        SubCategory::create([
            'name' => 'Diniy adabiyot',
            'slug' => 'kitob',
            'status' => 1,
            'category_id' => 7,
        ]);
        SubCategory::create([
            'name' => 'Jahon adabiyoti',
            'slug' => 'kitob',
            'status' => 1,
            'category_id' => 7,
        ]);
        SubCategory::create([
            'name' => 'Hujjatli kitoblar',
            'slug' => 'kitob',
            'status' => 1,
            'category_id' => 7,
        ]);
        SubCategory::create([
            'name' => 'Biznes kitoblari',
            'slug' => 'kitob',
            'status' => 1,
            'category_id' => 7,
        ]);
        SubCategory::create([
            'name' => 'San\'at madaniyat',
            'slug' => 'kitob',
            'status' => 1,
            'category_id' => 7,
        ]);
    }
}
