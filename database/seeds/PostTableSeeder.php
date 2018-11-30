<?php

use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->delete();

        $posts = [
            [
                'id_user'=>2,
                'text'=>'POSTS INICIAL',
                'resource'=>'pordefinir',
                'status'=>'1'
            ],
            [
                'id_user'=>2,
                'text'=>'POSTS SEGUNDO',
                'resource'=>'pordefinir',
                'status'=>'1'
            ],
            [
                'id_user'=>2,
                'text'=>'POSTS TERCERO',
                'resource'=>'pordefinir',
                'status'=>'1'
            ],
            [
                'id_user'=>2,
                'text'=>'POSTS CUARTO',
                'resource'=>'pordefinir',
                'status'=>'1'
            ],
            [
                'id_user'=>2,
                'text'=>'POSTS QUINTO',
                'resource'=>'pordefinir',
                'status'=>'1'
            ],
            [
                'id_user'=>2,
                'text'=>'POSTS SEXTO',
                'resource'=>'pordefinir',
                'status'=>'1'
            ],
            [
                'id_user'=>2,
                'text'=>'POSTS INICIAL',
                'resource'=>'pordefinir',
                'status'=>'1'
            ]
        ];
        foreach($posts as $post){
            \Coop\Post::create($post);
        }
    }
}
