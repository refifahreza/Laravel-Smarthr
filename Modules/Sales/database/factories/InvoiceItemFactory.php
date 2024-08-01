<?php

namespace Modules\Sales\Database\Factories;

use Modules\Sales\Models\Invoice;
use Illuminate\Database\Eloquent\Factories\Factory;

class InvoiceItemFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     */
    protected $model = \Modules\Sales\Models\InvoiceItem::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'invoice_id' => Invoice::inRandomOrder()->first()->id,
            'name' => $this->faker->word(),
            'description' => $this->faker->sentence(),
            'unit_cost' => $this->faker->randomFloat(),
            'quantity' => $this->faker->numberBetween(1,10),
            'total' => $this->state(function(array $attributes){
                return $attributes['unit_cost'] * $attributes['quantity'];
            })
        ];
    }
}

