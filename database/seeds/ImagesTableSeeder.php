<?php

use Illuminate\Database\Seeder;

class ImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('images')->insert([
            'image' => 's1.jpg',
            'product_id' => 1,
            'created_at' => new DateTime,
            'updated_at' => new DateTime,
        ]);

        DB::table('images')->insert([
            'image' => 's2.jpg',
            'product_id' => 2,
            'created_at' => new DateTime,
            'updated_at' => new DateTime,
        ]);

        DB::table('images')->insert([
            'image' => 's3.jpg',
            'product_id' => 3,
            'created_at' => new DateTime,
            'updated_at' => new DateTime,
        ]);

        DB::table('images')->insert([
            'image' => 's4.jpg',
            'product_id' => 4,
            'created_at' => new DateTime,
            'updated_at' => new DateTime,
        ]);

        DB::table('images')->insert([
            'image' => 's5.jpg',
            'product_id' => 5,
            'created_at' => new DateTime,
            'updated_at' => new DateTime,
        ]);

        DB::table('images')->insert([
            'image' => 's6.jpg',
            'product_id' => 6,
            'created_at' => new DateTime,
            'updated_at' => new DateTime,
        ]);

        DB::table('images')->insert([
            'image' => 's7.jpg',
            'product_id' => 7,
            'created_at' => new DateTime,
            'updated_at' => new DateTime,
        ]);
    }
}
