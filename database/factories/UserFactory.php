<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'note' => $this->faker->text(),
            'job_title' => $this->faker->jobTitle(),
            'phone' => $this->faker->numerify('01#########'),
            'address' => $this->faker->address(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }

    public function configure()
    {
        return $this->afterCreating(function (User $user) {
            $modules = ['users', 'data', 'shipments', 'inventory', 'reports', 'trash', 'settings'];
            shuffle($modules);
            for ($i = 0; $i < 4; $i++) {
                $permission =  \App\Models\Permission::firstOrCreate(['module' => $modules[$i]]);
                $user->permissions()->attach($permission->id, ['access' => 'read']);
            }
        });
    }
}
