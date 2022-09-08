<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       $user = new User;
       $user->nombre = 'Admin';
       $user->apellido = 'admin';
       $user->email ='admin@test.com';
       $user->password = '1234';
       $user->rol ='admin';
       $user->municipio ='Cuernavaca';
       $user->save();


       

    }
    
}
