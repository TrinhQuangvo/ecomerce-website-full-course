<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'email'=>'voquang1406@gmail.com',
                'password'=>bcrypt('123456'),
                'level'=>1
            ],
            [
                'email'=>'vietpro@gmail.com',
                'password'=>bcrypt('123456'),
                'level'=>1
            ]
        ];
        DB::table('vp_users')->insert($data);
    }
}
