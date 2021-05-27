<?php

namespace Database\Seeders;

use App\Models\User_Category\userCompanytype;
use App\Models\User_Category\userIndustry;
use Illuminate\Database\Seeder;
use Faker\Factory;

class userIndustry_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fakers=array(
            'Education',
            'Government',
            'Commerce',
            'Health Services',
            'Telecommunication Services',
            'Food Services',
            'Others'
        );
        foreach($fakers as $faker){
            userIndustry::create([

                'industry'=>$faker,

            ]);
        }
    }
}
