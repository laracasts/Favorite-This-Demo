<?php

class PostsTableSeeder extends Seeder {

    public function run()
    {
        $faker = Faker\Factory::create();

        Post::truncate();

        foreach(range(1, 30) as $index)
        {
            $userId = User::orderBy(DB::raw('RAND()'))->first()->id;

            Post::create([
                'user_id' => $userId,
                'title' => $faker->sentence(5),
                'body' => $faker->paragraph(3)
            ]);
        }
    }

}
