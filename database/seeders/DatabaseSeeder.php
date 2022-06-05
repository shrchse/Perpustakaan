<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //\App\Models\User::factory(5)->create();
        \App\Models\Member::factory(5)->create();
        \App\Models\Book::factory(5)->create();
        \App\Models\Visitor::factory(5)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        User::create([
            'username'=>'Amazida',
            'email'=>'2010817120002@mhs.ulm.ac.id',
            'password'=>bcrypt('aaaa')
        ]);
        User::create([
            'username'=>'Oling Anugrah Fajar Pratama',
            'email'=>'2010817210028@mhs.ulm.ac.id',
            'password'=>bcrypt('oooo')
        ]);
        User::create([
            'username'=>'Felisitas Artemisia Rerung',
            'email'=>'2010817120001@mhs.ulm.ac.id',
            'password'=>bcrypt('ffff')
        ]);
    }
}
