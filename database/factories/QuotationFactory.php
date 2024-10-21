<?php

namespace Database\Factories;

use App\Models\Quotation;
use App\Models\Customer;
use Illuminate\Database\Eloquent\Factories\Factory;

class QuotationFactory extends Factory
{
    protected $model = Quotation::class;

    public function definition()
    {
        return [
            'ClienteID' => Customer::factory(),  // Genera un cliente o usa uno existente
            'TotalCotización' => $this->faker->randomFloat(2, 100, 10000),
            'FechaCotización' => $this->faker->dateTimeThisYear(),
            'VálidaHasta' => $this->faker->dateTimeBetween('now', '+1 month'),
        ];
    }
}
