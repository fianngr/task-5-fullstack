<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\articles;
use App\Models\category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


        \App\Models\User::factory(3)->create();

        category::create([
            'name'=>'Teknologi',
            'user_id'=>mt_rand(1,3),
            // 'article_id'=>mt_rand(1,3)
        ]);
        category::create([
            'name'=>'Fashion',
            'user_id'=>mt_rand(1,3),
            // 'article_id'=>mt_rand(1,3)
        ]);

        articles::factory(10)->create();
    }
}
