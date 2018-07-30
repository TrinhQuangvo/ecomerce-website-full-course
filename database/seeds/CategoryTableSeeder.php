<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
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
                'cate_name'=>'Máy Tính Bảng',
                'cate_slug'=>str_slug('Máy Tính Bảng')
            ],[
                'cate_name'=>'Iphone',
                'cate_slug'=>str_slug('Iphone')
            ],[
                'cate_name'=>'Máy Tính Xách Tay',
                'cate_slug'=>str_slug('Máy Tính Xách Tay')
            ],[
                'cate_name'=>'Phụ Kiện',
                'cate_slug'=>str_slug('Phụ Kiện')
            ]
        ];
        DB::table('vp_categories')->insert($data);
    }
}
