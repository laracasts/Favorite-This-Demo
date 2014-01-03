<?php

class FavoritesTableSeeder extends Seeder {

    public function run()
    {
        $faker = Faker\Factory::create();

        DB::table('favorites')->truncate();

        foreach(range(1, 30) as $index)
        {
            $post = Post::orderBy(DB::raw('RAND()'))->first();

            User::orderBy(DB::raw('RAND()'))->first()->favorites()->attach($post->id);
        }
    }

}
