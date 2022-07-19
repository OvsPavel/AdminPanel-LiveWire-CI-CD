<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StationsTableSeeder extends Seeder
{
    /**
     * Первичное наполнение таблицы со Станциями
     *
     * @return void
     */
    public function run()
    {
        $items = [
            [
                'title' => 'Пожарная станция № 1',
                'location' => 'Москва'
            ],
            [
                'title' => 'Пожарная станция № 2',
                'location' => 'Москва'
            ],
            [
                'title' => 'Пожарная станция № 3',
                'location' => 'Екатеринбург'
            ],
            [
                'title' => 'Пожарная станция № 4',
                'location' => 'Екатеринбург'
            ]
            ,[
                'title' => 'Пожарная станция № 5',
                'location' => 'Самара'
            ]
        ];


        foreach ($items as $item) {
            DB::table('stations')->updateOrInsert([
                "title" =>  $item['title'],
            ], $item);
        }
    }
}
