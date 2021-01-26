<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('settings')->insert([
            'app_name'    => 'DealerSites',
            'description' => 'Sistema de Gestão de Concessionárias',
            'email'       => 'dearlesites@hotmail.com',
            'phone'       => null,
            'created_at'  => now(),
            'updated_at'  => now(),
        ]);
    }
}