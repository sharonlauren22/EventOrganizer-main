<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Carbon\Carbon;

class EventsSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create();

        DB::table('events')->insert([
            [
                'title' => 'Tech Expo 2024',
                'venue' => 'Convention Hall A',
                'date' => Carbon::create('2024', '12', '15'),
                'start_time' => '10:00:00',
                'description' => $faker->text(200),
                'booking_url' => 'https://www.expo2024.com',
                'tags' => 'technology,expo,2024',
                'organizer_id' => 1, // Assuming this refers to an existing organizer with id 1
                'event_category_id' => 1, // Assuming this refers to an existing event category with id 1
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'Music Concert Night',
                'venue' => 'Stadium B',
                'date' => Carbon::create('2024', '11', '20'),
                'start_time' => '19:00:00',
                'description' => $faker->text(200),
                'booking_url' => null,
                'tags' => 'music,concert,live',
                'organizer_id' => 2, // Assuming this refers to an existing organizer with id 2
                'event_category_id' => 2, // Assuming this refers to an existing event category with id 2
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'International Business Conference',
                'venue' => 'Hotel C Ballroom',
                'date' => Carbon::create('2024', '10', '25'),
                'start_time' => '09:00:00',
                'description' => $faker->text(200),
                'booking_url' => 'https://www.businessconf.com',
                'tags' => 'business,conference,2024',
                'organizer_id' => 3,
                'event_category_id' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'AI & Robotics Expo',
                'venue' => 'Exhibition Center D',
                'date' => Carbon::create('2024', '08', '18'),
                'start_time' => '11:00:00',
                'description' => $faker->text(200),
                'booking_url' => 'https://www.airobotics.com',
                'tags' => 'AI,robotics,expo',
                'organizer_id' => 4,
                'event_category_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'Startup Founders Conference',
                'venue' => 'Conference Hall E',
                'date' => Carbon::create('2024', '09', '10'),
                'start_time' => '09:30:00',
                'description' => $faker->text(200),
                'booking_url' => null,
                'tags' => 'startup,founders,conference',
                'organizer_id' => 5,
                'event_category_id' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'Annual Sports Gala',
                'venue' => 'Outdoor Arena F',
                'date' => Carbon::create('2024', '07', '22'),
                'start_time' => '17:00:00',
                'description' => $faker->text(200),
                'booking_url' => null,
                'tags' => 'sports,gala,annual',
                'organizer_id' => 1,
                'event_category_id' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
