<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class PostSubstringSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('post_substrings')->insert([
            'post_id' => \App\Post::all()->first()->id,
            'begin' => 100.0,
            'end' => 200.0,
        ]);
    }
}
