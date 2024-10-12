<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class EventCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('event_categories')->insert([
            ['name' => 'Expo', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Concert', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Conference', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ]);
    }
}
