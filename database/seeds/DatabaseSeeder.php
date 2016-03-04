<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Faker\Factory as Faker;



class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $faker = Faker::create();

        foreach(range(1, 30) as $index){
            \App\Article::create([
                'title' => $faker->sentence(5),
                'content' => $faker->paragraph(6)
            ]);
        }

        Model::reguard();
    }
}
