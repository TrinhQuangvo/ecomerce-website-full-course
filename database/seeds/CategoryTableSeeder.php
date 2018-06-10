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
            ]
        ];
        DB::table('vp_categories')->insert($data);
    }
}
