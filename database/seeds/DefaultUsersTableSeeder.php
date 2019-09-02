<?php

use Illuminate\Database\Seeder;
use Coop\User;
class DefaultUsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();

        $users = [
            [
                'name' => 'Usuario Inicial',
                'id_cooperativa' => 0, // COOPERATIVA DEFAULT FOR ALL
                'type_user' => 2,        // TIPO USUARIO SUPER ADMIN
                'email' => 'prueba@hotmail.es',
                'password' => bcrypt('123456')
            ],
            [
                'name' => 'Aurelio Smith',
                'id_cooperativa' => 3, // COOPERATIVA DEFAULT FOR ALL
                'type_user' => 1,        // TIPO USUARIO ENCARGADO DE CADA COOPERATIVA
                'email' => 'aureliosmith@hotmail.es',
                'password' => bcrypt('12345678')
            ]
        ];


        foreach($users as $user){
            User::create($user);
        }
    }
}
