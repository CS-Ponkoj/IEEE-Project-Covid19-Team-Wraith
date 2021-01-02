<?php

use Illuminate\Database\Seeder;
use Faker\Factory;

class BlogTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //reseting the posts table by truncate method
        DB::table('blogs')->truncate();
        //inserting data
        $posts=[];

        $faker=Faker\factory::create();
        for($i=0;$i<10;$i++){
            $image='Post_image_'.rand(1,5).'.jpg';
            $date=date('Y-m-d H:m:s',strtotime("2018-12-17 06:00:00 + {$i} days"));
            $posts[]=[

                "title"			=>$faker->sentence(rand(8,12)),
                "body"			=>$faker->paragraph(rand(10,15)),
                "slug"			=>$faker->slug(),
                "image"			=>$image,
                "created_at"	=>$date,
                "updated_at"	=>$date,
                "category_id"   =>rand(1,5),
                "published_at"  =>rand(0,1)
            ];
        }
        DB::table('blogs')->insert($posts);

    }
}
