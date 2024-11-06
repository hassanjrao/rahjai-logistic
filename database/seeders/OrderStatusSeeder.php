<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('order_statuses')->truncate();

        $statuses=[
            [
                'code'=>'BEING_PROCESSED',
                'name'=>'Being Processed',
                'description'=>'Package is being processed.',
                'created_at'=>now(),
                'updated_at'=>now()
            ],
            [
                'code'=>'IN_TRANSIT',
                'name'=>'In Transit',
                'description'=>'Package is on route to destination.',
                'created_at'=>now(),
                'updated_at'=>now()
            ],
            [
                'code'=>'RECEIVED',
                'name'=>'Received',
                'description'=>'Package received at destination facility.',
                'created_at'=>now(),
                'updated_at'=>now()
            ],
            [
                'code'=>'DELIVERED',
                'name'=>'Delivered',
                'description'=>'Package delivered successfully.',
                'created_at'=>now(),
                'updated_at'=>now()
            ]
        ];

        DB::table('order_statuses')->insert($statuses);
    }
}
