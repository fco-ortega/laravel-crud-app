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
            'apellido' => 'Wick',
            'email' => 'john@example.com',
            'fecha_nac' => '02-09-1964',
            'password' => 'test',
        ]);
        Usuario::create([
            'rut' => '111-2',
            'nombre' => 'Bruce',
            'apellido' => 'Wayne',
            'email' => 'wayne@example.com',
            'fecha_nac' => '30-03-1939',
            'password' => 'test2',
        ]);
        Usuario::create([
            'rut' => '111-3',
            'nombre' => 'Tony',
            'apellido' => 'Stark',
            'email' => 'stark@example.com',
            'fecha_nac' => '29-05-1970',
            'password' => 'test3',
        ]);
        Usuario::create([
            'rut' => '111-4',
            'nombre' => 'Bruce',
            'apellido' => 'Lee',
            'email' => 'lee@example.com',
            'fecha_nac' => '27-11-1940',
            'password' => 'test4',
        ]);
    }
}
