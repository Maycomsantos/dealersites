<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\UsersAccess;

class UsersAccessTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\UsersAccess::factory(15000)->create();
    }
}