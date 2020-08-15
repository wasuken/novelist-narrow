<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class PostPaperSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('post_papers')->insert([
            'post_id' => \App\Post::all()->first()->id,
            'paper_id' => \App\Paper::all()->first()->id,
            'position' => 100,
            'post_substring_id' => \App\PostSubstring::all()->first()->id,
        ]);
    }
}
