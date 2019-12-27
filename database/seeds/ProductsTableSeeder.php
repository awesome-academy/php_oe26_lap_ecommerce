<?php

use Illuminate\Database\Seeder;

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
            'name' => 'SP1',
            'price' => 10020,
            'price_sale' => 1342,
            'description' => 'SP1 SP1 SP1 SP1',
            'quantity' => 10,
            'category_id' => 9,
            'memory_id' => 2,
            'trademark_id' => 1,
            'created_at' => new DateTime,
            'updated_at' => new DateTime,
        ]);

        DB::table('products')->insert([
            'name' => 'SP2',
            'price' => 10020,
            'price_sale' => 1342,
            'description' => 'SP2 SP2 SP2 SP2',
            'quantity' => 10,
            'category_id' => 9,
            'memory_id' => 2,
            'trademark_id' => 1,
            'created_at' => new DateTime,
            'updated_at' => new DateTime,
        ]);

        DB::table('products')->insert([
            'name' => 'SP3',
            'price' => 10020,
            'price_sale' => 1342,
            'description' => 'SP3 SP3 SP3 SP3',
            'quantity' => 10,
            'category_id' => 10,
            'memory_id' => 2,
            'trademark_id' => 1,
            'created_at' => new DateTime,
            'updated_at' => new DateTime,
        ]);
        
        DB::table('products')->insert([
            'name' => 'SP4',
            'price' => 10020,
            'price_sale' => 1342,
            'description' => 'SP4 SP4 SP4 SP4',
            'quantity' => 10,
            'category_id' => 10,
            'memory_id' => 2,
            'trademark_id' => 1,
            'created_at' => new DateTime,
            'updated_at' => new DateTime,
        ]);

        DB::table('products')->insert([
            'name' => 'SP5',
            'price' => 10020,
            'price_sale' => 1342,
            'description' => 'SP5 SP5 SP5 SP5',
            'quantity' => 10,
            'category_id' => 11,
            'memory_id' => 2,
            'trademark_id' => 1,
            'created_at' => new DateTime,
            'updated_at' => new DateTime,
        ]);

        DB::table('products')->insert([
            'name' => 'SP6',
            'price' => 10020,
            'price_sale' => 1342,
            'description' => 'SP6 SP6 SP6 SP6',
            'quantity' => 10,
            'category_id' => 11,
            'memory_id' => 2,
            'trademark_id' => 1,
            'created_at' => new DateTime,
            'updated_at' => new DateTime,
        ]);

        DB::table('products')->insert([
            'name' => 'SP7',
            'price' => 10020,
            'price_sale' => 1342,
            'description' => 'SP7 SP7 SP7 SP7',
            'quantity' => 10,
            'category_id' => 12,
            'memory_id' => 2,
            'trademark_id' => 1,
            'created_at' => new DateTime,
            'updated_at' => new DateTime,
        ]);
    }
}
