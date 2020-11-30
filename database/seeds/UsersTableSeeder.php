<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'ahmed',
            'email' => 'ahmed@a',
            'password' => Hash::make('12355678'),
            'address' => 'Elharam',
            'type_id' => 1
        ]);
        DB::table('users')->insert([
            'name' => 'mohamed',
            'email' => 'mohamed@a',
            'password' => Hash::make('12355678'),
            'address' => 'Elmohandseen',
            'type_id' => 1
        ]);
        DB::table('users')->insert([
            'name' => 'ali',
            'email' => 'ali@a',
            'password' => Hash::make('12355678'),
            'address' => 'Elharam',
            'type_id' => 2
        ]);
    }
}
