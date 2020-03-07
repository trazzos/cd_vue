<?php

use Illuminate\Database\Seeder;

class yearTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $years = [
            ['id' => 2018],
            ['id' => 2019],
            ['id' => 2020],
        ];
 
        foreach ($years as $year)
            DB::table('year')->insert($year);
    }
}
