<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'name' => "test",
            'password' => md5('123456'),
            'type' => '0',
            'areacode' => "340000"
        ]);
    }
}
