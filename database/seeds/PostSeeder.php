<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            'title' => '第一話 生きる価値がない',
            'body' => '考えてない。',
            'novel_id' => \App\Novel::where('title', '妹の俺がこんなにかわいいわけがない')->first()->id
        ]);
        DB::table('posts')->insert([
            'title' => '第二話 うんち',
            'body' => '考えてないよー。',
            'novel_id' => \App\Novel::where('title', '妹の俺がこんなにかわいいわけがない')->first()->id
        ]);
    }
}
