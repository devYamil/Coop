<?php

use Illuminate\Database\Seeder;
use Coop\Cooperativa;

class CooperativaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cooperativas')->delete();

        $users = [
            [
                'nombre' => 'FENCOMIN',
                'telefono' => 838927,
                'direccion' => 'name@domain.com'
            ],
        ];


        foreach($users as $user){
            Cooperativa::create($user);
        }
    }
}
