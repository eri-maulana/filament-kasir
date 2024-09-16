<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Customer;
use App\Models\Order;
use App\Models\User;

class OrderFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Order::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'customer_id' => Customer::factory(),
            'order_number' => $this->faker->word(),
            'order_name' => $this->faker->word(),
            'discount' => $this->faker->numberBetween(-10000, 10000),
            'total' => $this->faker->numberBetween(-10000, 10000),
            'profit' => $this->faker->numberBetween(-10000, 10000),
            'payment_method' => $this->faker->word(),
            'status' => $this->faker->word(),
        ];
    }
}
