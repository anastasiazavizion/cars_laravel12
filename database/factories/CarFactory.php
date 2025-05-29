<?php

namespace Database\Factories;

use App\Models\CarType;
use App\Models\City;
use App\Models\FuelType;
use App\Models\Maker;
use App\Models\Model;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Car>
 */
class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'year'=>$this->faker->numberBetween(2000, 2024),
            'price'=>$this->faker->numberBetween(10000, 50000),
            'vin' => $this->faker->regexify('[A-HJ-NPR-Z0-9]{17}'),
            'mileage' => $this->faker->numberBetween(1000, 200000),
            'car_type_id'   => CarType::inRandomOrder()->value('id'),
            'fuel_type_id'  => FuelType::inRandomOrder()->value('id'),
            'user_id'       => User::inRandomOrder()->value('id'),
            'city_id'       => City::inRandomOrder()->value('id'),
            'maker_id'      => Maker::inRandomOrder()->value('id'),
            'model_id'      => Model::inRandomOrder()->value('id'),
            'address'=>$this->faker->address,
            'phone'=>$this->faker->phoneNumber,
            'description'=>$this->faker->realText,
            'published_at'=>Carbon::now(),
        ];
    }
}
