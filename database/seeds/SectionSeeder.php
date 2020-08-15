<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class SectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('sections')->insert([
            'title' => '1. hoge'
        ]);
        DB::table('sections')->insert([
            'title' => '2. fuga'
        ]);
    }
}
