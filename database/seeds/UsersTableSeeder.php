<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class, 7)->create();
        //Esto lo escribo para crear mi usuario por defecto al realizar el factory y no tener que volver a registrarme dada vez que ejecute el factory.
        App\User::create([
            'name'      => 'Raiff Hazanow',
            'email'     => 'auxilex@yahoo.com',
            'password'  => bcrypt('123') //bcrypt encripta la clave
        ]);
    }
}
