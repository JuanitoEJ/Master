<?php

use Illuminate\Database\Seeder;
use App\Specialty;

class SpecialitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Specialty::class, 6)->create();
    }
}
