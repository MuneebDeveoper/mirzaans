<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
// use Illuminate\Support\Str;
use Faker\Factory as Faker;
class Userseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('users')->insert([
        //     'name'=>Str::random(10),
        //     'email'=> Str::random(15).'@gmail.com',
        //     'password' => Hash::make(Str::random(10)),
        // ]);
        $faker=Faker::create();
        foreach (range(1,100)as $value){
            DB::table('users')->insert([
                'name'=>$faker->name(),
                'email'=> $faker->unique()->safeEmail(),
                'password' => Hash::make($faker->password()),
            ]);    

        }
    }


    
}

