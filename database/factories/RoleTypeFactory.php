<?php

namespace Database\Factories;

use App\Models\Role;
use Illuminate\Database\Eloquent\Factories\Factory;

class RoleTypeFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => $this->faker->text(10),
            'role_id' => Role::inRandomOrder()->first()->id,
        ];
    }
}
