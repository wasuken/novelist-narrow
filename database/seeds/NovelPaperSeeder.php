<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class NovelPaperSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('novel_papers')->insert([
            'novel_id' => \App\Novel::all()->first()->id,
            'paper_id' => \App\Paper::all()->first()->id,
        ]);
    }
}
