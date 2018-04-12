<?php

use Illuminate\Database\Seeder;
use App\Carrousel;

class CarrouselsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Carrousel::class, 6)->create();
    }
}
