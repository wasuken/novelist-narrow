<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AccesslogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('accesslogs')->insert([
            'post_id' => \App\Post::all()->first()->id,
            'reader_id' => \App\Reader::all()->first()->user_id,
            'ip_address' => '127.0.0.1',
            'user_agent_info' => 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.116 Safari/537.36'
        ]);
    }
}
