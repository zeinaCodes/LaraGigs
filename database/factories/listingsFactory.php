<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\listings>
 */
class listingsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
           'title' => $this->faker->sentence(), 
           'logo' =>null,
           'tags' => 'laravel, api, backend', 
           'company' => $this->faker->company(), 
           'location' => $this->faker->city(),
           'email' => $this->faker->companyEmail(), 
           'website' => $this->faker->url(),  
           'description' => $this->faker->paragraph(2), 
        ];
    }
}
