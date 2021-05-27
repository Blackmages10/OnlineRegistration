<?php

namespace Database\Seeders;

use App\Models\User_Category\userJobrole;
use Illuminate\Database\Seeder;
use Faker\Factory;

class userJobrole_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fakers=array(
            'Student',
            'Faculty',
            'Bussiness Owner',
            'Self Employed',
            'Others'
        );
        foreach($fakers as $faker){
            userJobrole::create([

                'job_role'=>$faker,

            ]);
        }
    }
}
