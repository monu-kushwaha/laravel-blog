<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\models\user;
use Illuminate\Support\Facades\File;

class StudentSeedes extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        for($i = 1; $i <= 10; $i++){
            user::create([
                'name' => fake()->name(),
                'email' => fake()->unique()->email(),
                'age' => rand(10, 50),
                'city' => fake()->city(),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]);
        }



        // $users = collect([
        //     [
        //     'name' => 'monu1',
        //     'email' => 'monu1@gmail.com',
        //     'created_at' => date('Y-m-d H:i:s'),
        //     'updated_at' => date('Y-m-d H:i:s'),
        //     ],
        //     [
        //     'name' => 'luis',
        //     'email' => 'luis@gmail.com',
        //     'created_at' => date('Y-m-d H:i:s'),
        //     'updated_at' => date('Y-m-d H:i:s'),
        //     ],
        //     [
        //     'name' => 'test',
        //     'email' => 'test@gmail.com',
        //     'created_at' => date('Y-m-d H:i:s'),
        //     'updated_at' => date('Y-m-d H:i:s'),
        //     ],
        // ]);


        // $json = File::get(path:'database/json/user.json');
        // $users = collect(json_decode($json));
        // $users->each(function($user){
        //     user::create([
        //         'name' => $user->name,
        //         'email' => $user->email,
        //         'created_at' => date('Y-m-d H:i:s'),
        //         'updated_at' => date('Y-m-d H:i:s'),
        //     ]);
        // });


        // $users->each(function($user){
        //     user::insert($user);
        // });

        // user::create([
        //     'name' => 'monu',
        //     'email' => 'monu@gmail.com',
        //     'created_at' => date('Y-m-d H:i:s'),
        //     'updated_at' => date('Y-m-d H:i:s'),
        // ]);
    }
}
