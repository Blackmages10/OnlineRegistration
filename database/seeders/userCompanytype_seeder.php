<?php

namespace Database\Seeders;

use App\Models\User_Category\userCompanytype;
use Illuminate\Database\Seeder;
use Faker\Factory;

class userCompanytype_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fakers=array(
            'School',
            'Business',
            'Organization',
            'Club',
            'Others'
        );
        foreach($fakers as $faker){
            userCompanytype::create([

                'company_type'=>$faker,

            ]);
        }
    }
}
