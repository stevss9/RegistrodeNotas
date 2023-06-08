<?php

use Illuminate\Database\Seeder;

use App\Alumnos;
use App\User;
use Illuminate\Support\Facades\DB;
use Faker\Factory;
use Spatie\Permission\Models\Role;



class Alumno extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create(['name' => 'admin']);
        Role::create(['name' => 'profesor']);
        Role::create(['name' => 'alumno']);
        $faker = Factory::create();
        $gender = $faker->randomElement(['M', 'F']);

        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
		DB::table('alumnos')->truncate();
		DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
		DB::table('users')->truncate();
		DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        /* DB::table('alumnos')->insert([
            'nombre' => $faker->name,
            'apellido' => $faker->name,
            'fechanacimiento' => '2021-09-18',
            'direccion' => 'San Salvador',
            'genero' => $gender,
            'telefono' => random_int(1000000, 999999999),
            'correo' => $faker->name.'@gmail.com',
            'clave' =>  bcrypt('password'),
        ]); */

        $datos = [
        'nombre' => 'Mercy',
        'apellido' => 'Arrobo',
        'fechanacimiento' => '2000-09-07',
        'direccion' => 'Santo Domingo',
        'genero' => 'F',
        'telefono' => random_int(1000000, 999999999),
        'correo' => 'myarrrobo@espe.edu.ec',
        'clave' =>  bcrypt('12345678'),
        ];

        $datos1 = [
            'nombre' => 'Fernando',
            'apellido' => 'Masache',
            'fechanacimiento' => '2000-09-07',
            'direccion' => 'Santo Domingo',
            'genero' => 'M',
            'telefono' => random_int(1000000, 999999999),
            'correo' => 'fmasache@espe.edu.ec',
            'clave' =>  bcrypt('12345678'),
        ];

        $datos2 = [
            'nombre' => 'Noelia',
            'apellido' => 'Anchundia',
            'fechanacimiento' => '2000-09-07',
            'direccion' => 'Santo Domingo',
            'genero' => 'F',
            'telefono' => random_int(1000000, 999999999),
            'correo' => 'nanchundia@espe.edu.ec',
            'clave' =>  bcrypt('12345678'),
        ];

        

        $user = User::create([
            'name' => 'Mercy Arrobo',
            'email' => 'myarrrobo@espe.edu.ec',
            'password' => bcrypt('12345678'),
            'idalumno' => '1'
        ]);
        $user->assignRole('alumno');

        $user1 = User::create([
            'name' => 'Fernando Masache',
            'email' => 'fmasache@espe.edu.ec',
            'password' => bcrypt('12345678'),
            'idalumno' => '1'
        ]);
        $user1->assignRole('alumno');

        $user2 = User::create([
            'name' => 'Noelia Anchundia',
            'email' => 'nanchundia@espe.edu.ec',
            'password' => bcrypt('12345678'),
            'idalumno' => '1'
        ]);
        $user2->assignRole('alumno');

        Alumnos::create($datos);
        Alumnos::create($datos1);
        Alumnos::create($datos2);


        //factory(Alumnos::class, 18)->create();



    }
}
