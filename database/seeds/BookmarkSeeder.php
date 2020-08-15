<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class BookmarkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bookmarks')->insert([
            'reader_id' => \App\Reader::all()->first()->user_id,
            'post_id' => \App\Post::all()->first()->id,
            'position' => 100,
            'enable' => true,
        ]);
    }
}
