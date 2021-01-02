<?php

use Illuminate\Database\Seeder;

class ReplyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //reseting the posts table by truncate method
        DB::table('replies')->truncate();
        //inserting data
        $replies=[];

        $faker=Faker\factory::create();
        for($i=0;$i<500;$i++){
            $image='Post_image_'.rand(1,5).'.jpg';
            $date=date('Y-m-d H:m:s',strtotime("2018-12-17 06:00:00 + {$i} days"));
            $replies[]=[

                "text"			=>$faker->sentence(rand(8,12)),
                "comment_id"	=>rand(1,100),
                "author_id"     =>rand(1,5),
                "created_at"    =>$date
            ];
        }
        DB::table('replies')->insert($replies);

    }
}
