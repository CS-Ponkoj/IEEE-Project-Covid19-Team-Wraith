<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        $this->call(AdminTableSeeder::class);
        $this->call(BlogTableSeeder::class);
        $this->call(CategoryTableSeeder::class);
        $this->call(CommentTableSeeder::class);
        $this->call(ReplyTableSeeder::class);


    }
}
