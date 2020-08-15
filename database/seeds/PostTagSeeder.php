<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class PostTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('post_tags')->insert([
            'post_id' => \App\Post::all()->first()->id,
            'tag_id' => \App\Tag::all()->first()->id,
        ]);
        DB::table('post_tags')->insert([
            'post_id' => \App\Post::all()->skip(1)->first()->id,
            'tag_id' => \App\Tag::all()->skip(1)->first()->id,
        ]);
    }
}
