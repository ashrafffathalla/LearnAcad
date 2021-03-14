<?php

use Illuminate\Database\Seeder;
use App\Trainer;
class Trainerseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Trainer::create([

            'name' => 'Ashraf Fathalla',
            'spec' => 'web development',
            'img' => '1.jpg'

        ]);
        Trainer::create([

            'name' => 'Mohamed Gamile',
            'spec' => 'web development',
            'img' => '2.jpg'

        ]);

        ///////////
        Trainer::create([

            'name' => 'Ahmed khaled',
            'spec' => 'dintest',
            'img' => '3.jpg'

        ]);

        Trainer::create([

            'name' => 'Doaa Fathalla',
            'spec' => 'Doctor',
            'img' => '4.jpg'

        ]);

        Trainer::create([

            'name' => 'Gehad khota',
            'spec' => 'English teacher',
            'img' => '5.jpg'

        ]);



    }
}
