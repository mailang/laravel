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
            'username' => "test",
            'name' => "管理员",
            'password' => md5('123456'),
            'type' => '0',
            'areacode' => "340000"
        ]);
        DB::table('users')->insert([
            'username' => "test1",
            'name' => "XX小贷公司",
            'password' => md5('123456'),
            'type' => '1',
            'areacode' => "340101"
        ]);
        DB::table('users')->insert([
            'username' => "test2",
            'name' => "市辖区金融办",
            'password' => md5('123456'),
            'type' => '2',
            'areacode' => "340101"
        ]);
        DB::table('users')->insert([
            'username' => "test3",
            'name' => "合肥金融办",
            'password' => md5('123456'),
            'type' => '2',
            'areacode' => "340100"
        ]);
        DB::table('users')->insert([
            'username' => "test4",
            'name' => "省金融办",
            'password' => md5('123456'),
            'type' => '2',
            'areacode' => "340000"
        ]);
    }
}
