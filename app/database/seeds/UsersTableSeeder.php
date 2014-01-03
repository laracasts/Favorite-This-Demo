<?php

class UsersTableSeeder extends Seeder {

    public function run()
    {
        $faker = Faker\Factory::create();

        User::truncate();

        foreach(range(1, 30) as $index)
        {
            User::create([
                'email' => $faker->email,
                'password' => Hash::make('1234')
            ]);
        }
    }

}
