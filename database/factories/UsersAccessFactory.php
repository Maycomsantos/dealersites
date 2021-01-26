<?php

namespace Database\Factories;

use App\Models\{UsersAccess,User};
use Illuminate\Database\Eloquent\Factories\Factory;

class UsersAccessFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = UsersAccess::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [            
            'last_login_at' =>  now(), 
        ];
    }
}