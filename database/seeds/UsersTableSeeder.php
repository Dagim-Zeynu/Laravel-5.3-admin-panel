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
        $user = App\User::create([
            'name' => 'dagim',
            'email' => 'dagim35z@gmail.com',
            'password' => bcrypt('dagis era'),
            'admin' => 1
        ]);

        App\Profile::create([
            'user_id' =>$user->id,
            'avatar' => 'uploads/avatars/1.jpg',
            'about' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corporis dolore facere ipsam est? At voluptas nam vel consectetur aspernatur ipsa asperiores, placeat optio! Ad odio, animi quis illum iusto voluptatem eum, itaque sint consequuntur dolore soluta maiores sed repudiandae ex recusandae accusamus, doloribus molestias modi illo. Dolores consectetur voluptatum iure.',
            'facebook' => 'facebook.com',
            'youtube' => 'youtube.com'
            
        ]);
    }
}
