<?php

use Illuminate\Database\Seeder;
use App\Course;
class Courseseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1; $i <=3 ; $i++) { 
           for ($j=1; $j <=6 ; $j++) { 
              Course::create([
                'cat_id'=>$i,
                'trainer_id'=>rand(1,5),
                'name'=>"course num $j cat name $j",
                'small_desc'=>"You can write a whole profile for your characters.",
                'desc'=>"Middle English from Germanic an unverified form bugja, swollen up, thick (from source bug and Norwegian dialect, dialectal bugge, big man) from Indo-European base an unverified form beu-, an unverified form bheu-, to blow up, swell from source puck, Classical Latin bucca, puffed cheek",
                'price'=> rand(1000,8000),
                'img'=>"$i$j.jpg",

              ]);
           }
        }

    }
}
