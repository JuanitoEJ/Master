<?php

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
        $this->call(UsersTableSeeder::class);
        $this->call(CarrouselsTableSeeder::class);
        $this->call(AboutsTableSeeder::class);
        $this->call(PicturesTableSeeder::class);
        $this->call(SpecialitiesTableSeeder::class);
        $this->call(CalltacsTableSeeder::class);
        $this->call(ClientsTableSeeder::class);
        $this->call(TestimoniesTableSeeder::class);
        $this->call(TeamsTableSeeder::class);
    }
}
