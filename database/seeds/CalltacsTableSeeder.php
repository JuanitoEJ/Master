<?php

use Illuminate\Database\Seeder;
use App\Calltac;

class CalltacsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Calltac::class, 2)->create();
    }
}
