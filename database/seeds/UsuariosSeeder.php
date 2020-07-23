<?php

use Illuminate\Database\Seeder;
use App\Usuario;

class UsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Usuario::truncate();
        Usuario::create([
            'rut' => '111-1',
            'nombre' => 'John',
            'apellido' => 'Doe',
            'email' => 'john@example.com',
            'fecha_nac' => '01-01-1990',
            'password' => 'test',
        ]);
        Usuario::create([
            'rut' => '111-2',
            'nombre' => 'Bruce',
            'apellido' => 'Wayne',
            'email' => 'wayne@example.com',
            'fecha_nac' => '01-01-1990',
            'password' => 'test2',
        ]);
        Usuario::create([
            'rut' => '111-3',
            'nombre' => 'Tony',
            'apellido' => 'Stark',
            'email' => 'stark@example.com',
            'fecha_nac' => '01-01-1990',
            'password' => 'test3',
        ]);
    }
}
