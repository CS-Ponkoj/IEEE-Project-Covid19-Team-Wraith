<?php

use Illuminate\Database\Seeder;

class CommentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //reseting the posts table by truncate method
        DB::table('comments')->truncate();
        //inserting data
        $comments=[];

        $faker=Faker\factory::create();
        for($i=0;$i<100;$i++){
            $image='Post_image_'.rand(1,5).'.jpg';
            $date=date('Y-m-d H:m:s',strtotime("2018-12-17 06:00:00 + {$i} days"));
            $comments[]=[

                "text"			=>$faker->sentence(rand(8,12)),
                "blog_id"	    =>rand(1,10),
                "author_id"     =>rand(1,5),
                "created_at"    =>$date
            ];
        }
        DB::table('comments')->insert($comments);

    }
}
