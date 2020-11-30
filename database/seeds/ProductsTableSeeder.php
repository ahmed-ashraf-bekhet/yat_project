<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name' => 'ahaasdfas',
            'description' => 'askhlkaffa',
            'image' => 'https://firebasestorage.googleapis.com/v0/b/laravel-firebase-39c14.appspot.com/o/online-shopping%2Fof11.png?alt=media&token=407618ee-1057-4e15-9e01-9cd81f7337f4',
            'category_id' => 1
        ]);
        DB::table('products')->insert([
            'name' => 'ahaaasdafssdfas',
            'description' => 'askhlkaffa',
            'image' => 'https://firebasestorage.googleapis.com/v0/b/laravel-firebase-39c14.appspot.com/o/online-shopping%2Fof11.png?alt=media&token=407618ee-1057-4e15-9e01-9cd81f7337f4',
            'category_id' => 1
        ]);
        DB::table('products')->insert([
            'name' => 'ahaasdpojetwfas',
            'description' => 'askhlkaffa',
            'image' => 'https://firebasestorage.googleapis.com/v0/b/laravel-firebase-39c14.appspot.com/o/online-shopping%2Fof11.png?alt=media&token=407618ee-1057-4e15-9e01-9cd81f7337f4',
            'category_id' => 2
        ]);
        DB::table('products')->insert([
            'name' => 'ahaasdflotwjelas',
            'description' => 'askhlkaffa',
            'image' => 'https://firebasestorage.googleapis.com/v0/b/laravel-firebase-39c14.appspot.com/o/online-shopping%2Fof11.png?alt=media&token=407618ee-1057-4e15-9e01-9cd81f7337f4',
            'category_id' => 2
        ]);
        DB::table('products')->insert([
            'name' => 'ahaasdfavmmvvxcs',
            'description' => 'askhlkaffa',
            'image' => 'https://firebasestorage.googleapis.com/v0/b/laravel-firebase-39c14.appspot.com/o/online-shopping%2Fof11.png?alt=media&token=407618ee-1057-4e15-9e01-9cd81f7337f4',
            'category_id' => 2
        ]);
    }
}
