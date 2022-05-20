<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(1)->create();
        // DB::table('users')->insert([
        //     'name' => Str::random(10),
        //     'email' => Str::random(10).'@gmail.com',
        //     'password' => Hash::make('password'),
        // ]);
        // $this->call([
        //     UsersTableSeeder::class,
        //     PostsTableSeeder::class,
        // ]);
    //     $this->call(
    //         PostTableSeeder::class,
    //         // PostTableSeeder::class,
    //         UserTableSeeder::class,

    // );
    \App\Models\Post::factory(100)->create();
    // \App\Models\User::factory()->create()->each(function ($customer) {
    //     // Seed the relation with one address
    //     \App\Models\Post::factory(100)->make();
    // });
    }
}
