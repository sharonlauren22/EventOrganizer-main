<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use Carbon\Carbon;

class OrganizersSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create();
        DB::table('organizers')->insert([
            [
                'name' => 'Green Future Technologies',
                'description' => $faker->text(200),
                'facebook_link' => 'https://www.facebook.com/greenfuturetech',
                'x_link' => 'https://www.x.com/greenfuturetech',
                'website_link' => 'https://www.greenfuturetech.com',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            
            [
                'name' => 'InnovateX Solutions',
                'description' => $faker->text(200),
                'facebook_link' => 'https://www.facebook.com/innovatexsolutions',
                'x_link' => 'https://www.x.com/innovatexsolutions',
                'website_link' => 'https://www.innovatexsolutions.com',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            
            [
                'name' => 'FutureTech Labs',
                'description' => $faker->text(200),
                'facebook_link' => 'https://www.facebook.com/futuretechlabs',
                'x_link' => 'https://www.x.com/futuretechlabs',
                'website_link' => 'https://www.futuretechlabs.com',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            
            [
                'name' => 'NextGen Robotics',
                'description' => $faker->text(200),
                'facebook_link' => 'https://www.facebook.com/nextgenrobotics',
                'x_link' => 'https://www.x.com/nextgenrobotics',
                'website_link' => 'https://www.nextgenrobotics.com',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            
            [
                'name' => 'Sustainable Energy Innovators',
                'description' => $faker->text(200),
                'facebook_link' => 'https://www.facebook.com/sustainableenergy',
                'x_link' => 'https://www.x.com/sustainableenergy',
                'website_link' => 'https://www.sustainableenergy.com',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
