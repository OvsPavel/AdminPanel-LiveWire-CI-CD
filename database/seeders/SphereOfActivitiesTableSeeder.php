<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SphereOfActivitiesTableSeeder extends Seeder
{
    /**
     * Первичное наполнение таблицы со Сферами деятельности объектов пожарных станций
     *
     * @return void
     */
    public function run()
    {
        $items = [
            [
                'title' => 'Образование',
            ],
            [
                'title' => 'Торговля',
            ],
            [
                'title' => 'Услуги частным лицам',
            ],
            [
                'title' => 'Услуги для бизнеса',
            ]
            ,[
                'title' => 'Государственное учреждение',
            ]
        ];


        foreach ($items as $item) {
            DB::table('sphere_of_activities')->updateOrInsert([
                "title" =>  $item['title'],
            ], $item);
        }
    }
}