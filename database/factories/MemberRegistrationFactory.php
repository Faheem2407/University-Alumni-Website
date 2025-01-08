<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\MemberRegistration>
 */
class MemberRegistrationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'fname' => fake()->name(),
            'mname' => fake()->name(),
            'phone' => "01726332637",
            'email' => fake()->unique()->safeEmail(),
            'department' => 'cse',
            //'department' => 'eee',
            //'department' => 'music',
            //'department' => 'bangla',
			'session'=> "2019-20",
			'address'=> fake()->address(),
			//'job'=> 'College Teacher',
			'job'=> 'student',
			//'job'=> 'banker',
			//'job'=> 'software-engineer',
			//'blood'=> 'A+',
			//'blood'=> 'B+',
			//'blood'=> 'O+',
			'blood'=> 'A-',
			'image'=>fake()->image(),
			'password' => Hash::make('password'),
			'confirm_password' => Hash::make('confirm_password'),
        ];
    }
}
