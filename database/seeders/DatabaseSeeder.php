<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use App\Models\Category;
use App\Models\Inventory;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        DB::statement('SET FOREIGN_KEY_CHECKS=0');

        Category::truncate();
        Inventory::truncate();
        Order::truncate();
        OrderItem::truncate();
        Product::truncate();
        User::truncate();
        

        $categoryQuantty=5;
        $inventoryQuantty=100;
        $orderQuantty=50;
        $orderItemQuantty=150;
        $productQuantty=30;
        $userQuantty=15;

        // for laravel 5.*
        // factory(Employees::class,$employeesQuantty)->create();
        // factory(Locations::class,$locationsQuantty)->create();
        // factory(Merchants::class,$merchantsQuantty)->create();
        // factory(Products::class,$productsQuantty)->create();
        // factory(Sells::class,$sellsQuantty)->create();
        // factory(Visits::class,$visitsQuantty)->create();

        //for laravel 8.*
        Category::factory()->count($categoryQuantty)->create();
        Product::factory()->count($productQuantty)->create();
        Inventory::factory()->count($inventoryQuantty)->create();
        User::factory()->count($userQuantty)->create();
        Order::factory()->count($orderQuantty)->create();
        OrderItem::factory()->count($orderItemQuantty)->create();
        
        
    }
}
