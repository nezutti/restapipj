<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Rest;
use Illuminate\Support\Str;

class RestFactory extends Factory
{  
  protected $model=Rest::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "message"=>str::random(10),
            "url"=>$this->faker->url,
        ];
    }
}
