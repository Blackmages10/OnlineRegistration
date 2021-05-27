<?php

namespace Database\Seeders;

use App\Models\User_Category\userCompanytype;
use App\Models\User_Category\userIndustry;
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
        // \App\Models\User::factory(10)->create();
        $this->call([userIndustry_seeder::class,userJobrole_seeder::class,userCompanytype_seeder::class]);
    }
}
