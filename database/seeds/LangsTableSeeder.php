<?php

use Illuminate\Database\Seeder;

class LangsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('langs')->insert([
            ['lang_name' =>'HTML/CSS'],
            ['lang_name' =>'JavaScript'],
            ['lang_name' =>'PHP'],
            ['lang_name' =>'Ruby'],
            ['lang_name' =>'その他'],
        ]);
    }
}
