<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StationTypesTableSeeder extends Seeder
{
    /**
     * Первичное наполнение таблицы c Типами объектов пожарных станций
     *
     * @return void
     */
    public function run()
    {
        $items = [
            [
                'title' => 'LC',
            ],
            [
                'title' => 'NC',
            ],
            [
                'title' => 'TC',
            ],
            [
                'title' => 'JC',
            ]
            ,[
                'title' => 'XC',
            ]
        ];


        foreach ($items as $item) {
            DB::table('station_types')->updateOrInsert([
                "title" =>  $item['title'],
            ], $item);
        }
    }
}