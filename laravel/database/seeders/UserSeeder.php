<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::create([
          'name' =>'Doniyor',
            'last_name'  => 'Komiljonov' ,
           'email' =>'doniyor99@gmail.com' ,
            'password' => Hash::make('19990318'),
        ]);
    }
}
