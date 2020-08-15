<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $names = ['writer1', 'reader1'];
        foreach($names as $k => $v){
            DB::table('users')->insert([
                'email' => $v . '@hogemail.com',
                'name' => $v,
                'password' => Str::random(40)
            ]);
        }
    }
}
