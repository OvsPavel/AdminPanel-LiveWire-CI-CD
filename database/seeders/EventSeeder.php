<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            [
                'station_id' => 1,
                'station_object_id' => 1,
                'emergency_id' => 1,
                'start_time' => Carbon::now()->subDays(16)->subHours(10),
            ],

            [
                'station_id' => 2,
                'station_object_id' => 2,
                'emergency_id' => 2,
                'start_time' => Carbon::now()->subDays(13)->subHours(7)
            ],

            [
                'station_id' => 5,
                'station_object_id' => 3,
                'emergency_id' => 4,
                'start_time' => Carbon::now()->subDays(6)->subHours(11)
            ],

            [
                'station_id' => 4,
                'station_object_id' => 4,
                'emergency_id' => 6,
                'start_time' => Carbon::now()->subDays(3)->subHours(8)
            ],

            [
                'station_id' => 3,
                'station_object_id' => 5,
                'emergency_id' => 3,
                'start_time' => Carbon::now()->subDays(8)->subHours(4)
            ],
        ];


        foreach ($items as $item) {
            DB::table('events')->updateOrInsert([
                "station_id" =>  $item['station_id'],
                "station_object_id" =>  $item['station_object_id'],
                "start_time" =>  $item['start_time']
            ], $item);
        }
    }
}
