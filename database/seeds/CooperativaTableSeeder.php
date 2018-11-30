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
            [
                'nombre' => 'FENCOTRANS',
                'telefono' => 838927,
                'direccion' => 'name@domain.com'
            ],
            [
                'nombre' => 'FEBOCAC',
                'telefono' => 838927,
                'direccion' => 'name@domain.com'
            ],
            [
                'nombre' => 'FENCOA',
                'telefono' => 838927,
                'direccion' => 'name@domain.com'
            ],
            [
                'nombre' => 'FECOTEL',
                'telefono' => 838927,
                'direccion' => 'name@domain.com'
            ],
            [
                'nombre' => 'FENALCOE',
                'telefono' => 838927,
                'direccion' => 'name@domain.com'
            ],
            [
                'nombre' => 'COBOCE',
                'telefono' => 838927,
                'direccion' => 'name@domain.com'
            ],
            [
                'nombre' => 'FENCA',
                'telefono' => 838927,
                'direccion' => 'name@domain.com'
            ],
            [
                'nombre' => 'FENCOPAS',
                'telefono' => 838927,
                'direccion' => 'name@domain.com'
            ]
        ];


        foreach($users as $user){
            Cooperativa::create($user);
        }
    }
}
