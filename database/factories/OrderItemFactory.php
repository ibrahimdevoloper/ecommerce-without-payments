<?php

namespace Database\Factories;

use App\Models\OrderItem;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderItemFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = OrderItem::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'price'=>$this->faker->randomNumber(6),
            'quantity'=>$this->faker->randomNumber(6),
            'order_id'=>Order::all()->random()->id,
            'product_id'=>Product::all()->random()->id,
        ];
    }
}
