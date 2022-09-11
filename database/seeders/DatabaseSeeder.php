<?php

namespace Database\Seeders;

use App\Models\Companie;
use App\Models\Employee;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(1)->create();
        Companie::factory(40)->create();
        Employee::factory(150)->create();
    }
}
