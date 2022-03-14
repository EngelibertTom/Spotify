<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

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
        DB::table('users')->insert([
            'name' => "tom",
            'email' => "tom@gmail.com",
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => "Gilles",
            'email' => "Gilles@gmail.com",
            'password' => Hash::make('password'),
        ]);

        DB::table('songs')->insert([
            'title' => Str::random(10),
            'url' => "https://file-examples-com.github.io/uploads/2017/11/file_example_MP3_700KB.mp3",
            'note' => rand(0,20),
            'user_id'=> 1
        ]);

        DB::table('songs')->insert([
            'title' => Str::random(10),
            'url' => "https://file-examples-com.github.io/uploads/2017/11/file_example_MP3_1MG.mp3",
            'note' => rand(0,20),
            'user_id'=> 1
        ]);

        DB::table('songs')->insert([
            'title' => Str::random(10),
            'url' => "https://file-examples-com.github.io/uploads/2017/11/file_example_MP3_2MG.mp3",
            'note' => rand(0,20),
            'user_id'=> 1
        ]);
    }
}
