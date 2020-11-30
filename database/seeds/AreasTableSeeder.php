<?php

use Illuminate\Database\Seeder;

class AreasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('areas')->insert([
            ['area_name' =>'東北'],
            ['area_name' =>'関西'],
            ['area_name' =>'関東'],
            ['area_name' =>'近畿'],
            ['area_name' =>'四国'],
            ['area_name' =>'中国'],
            ['area_name' =>'九州'],
        ]);
    }
}
