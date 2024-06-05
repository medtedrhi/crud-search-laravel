<?php

namespace Database\Factories;

use App\Models\students;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\students>
 */
class StudentsFactory extends Factory
{
    protected $model = students::class;



    public function definition(): array
    {

        $grade= fake()->randomFloat(2,0,20);

        return [
            'first_name'=>fake()->firstName(),
            'last_name'=>fake()->lastName(),
            'grade'=> $grade ,
            'passed' => $grade >= 10,
            'created_at' =>now(),
            'updated_at'=> now(),

        ];
    }
}
