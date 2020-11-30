<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => 'TVs',
            'admin_id' => 1
        ]);
        DB::table('categories')->insert([
            'name' => 'Computerss',
            'admin_id' => 2
        ]);
    }
}
