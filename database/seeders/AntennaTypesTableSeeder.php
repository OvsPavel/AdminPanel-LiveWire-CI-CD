<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AntennaTypesTableSeeder extends Seeder
{
    /**
     * Первичное наполнение таблицы c типами Антенн объектов пожарных станций
     *
     * @return void
     */
    public function run()
    {
        $items = [
            [
                'title' => 'ADM',
            ],
            [
                'title' => 'BDM',
            ],
            [
                'title' => 'CDM',
            ],
            [
                'title' => 'DDM',
            ]
            ,[
                'title' => 'EDM',
            ]
        ];


        foreach ($items as $item) {
            DB::table('antenna_types')->updateOrInsert([
                "title" =>  $item['title'],
            ], $item);
        }
    }
}