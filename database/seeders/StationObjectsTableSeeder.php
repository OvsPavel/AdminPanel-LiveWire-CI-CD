<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StationObjectsTableSeeder extends Seeder
{
    /**
     * Первичное наполнение таблицы с Под-Категориями
     *
     * @return void
     */
    public function run()
    {
        $items = [
            [
                'title' => 'Школа № 12',
                'station_id' => 1,
                'number' => '000001',
                'station_type_id' => 1,
                'antenna_type_id' => 1,
                'address' => 'ул. Пушкина, 12',
                'status' => 'real',
                'contract_type_id' => 1,
                'sphere_of_activity_id' => 1,
                'regulatory_works' => 'нет'
            ],
            [
                'title' => 'Школа № 19',
                'station_id' => 2,
                'number' => '000002',
                'station_type_id' => 1,
                'antenna_type_id' => 2,
                'address' => 'ул. Советская, 12',
                'status' => 'real',
                'contract_type_id' => 1,
                'sphere_of_activity_id' => 1,
                'regulatory_works' => 'нет'
            ],
            [
                'title' => 'Школа № 74',
                'station_id' => 5,
                'number' => '000003',
                'station_type_id' => 2,
                'antenna_type_id' => 2,
                'address' => 'ул. Латыгина, 75',
                'status' => 'real',
                'contract_type_id' => 2,
                'sphere_of_activity_id' => 1,
                'regulatory_works' => 'нет'
            ],
            [
                'title' => 'Магазин "Аленка"',
                'station_id' => 4,
                'number' => 000004,
                'station_type_id' => 2,
                'antenna_type_id' => 3,
                'address' => 'ул. Черемухина, 2',
                'status' => 'real',
                'contract_type_id' => 3,
                'sphere_of_activity_id' => 2,
                'regulatory_works' => 'нет'
            ],
            [
                'title' => 'Гипермаркет "Радуга"',
                'station_id' => 3,
                'number' => '000005',
                'station_type_id' => 1,
                'antenna_type_id' => 4,
                'address' => 'ул. Ватагина, 19',
                'status' => 'real',
                'contract_type_id' => 4,
                'sphere_of_activity_id' => 2,
                'regulatory_works' => 'нет'
            ],
            [
                'title' => 'Автомастераская "Старт"',
                'station_id' => 3,
                'number' => '000006',
                'station_type_id' => 5,
                'antenna_type_id' => 2,
                'address' => 'ул. Артюхова, 73',
                'status' => 'real',
                'contract_type_id' => 3,
                'sphere_of_activity_id' => 3,
                'regulatory_works' => 'нет'
            ],
            
            [
                'title' => 'Школа № 91',
                'station_id' => 1,
                'number' => '000007',
                'station_type_id' => 1,
                'antenna_type_id' => 5,
                'address' => 'ул. Чкалова, 12',
                'status' => 'real',
                'contract_type_id' => 5,
                'sphere_of_activity_id' => 1,
                'regulatory_works' => 'нет'
            ],
            [
                'title' => 'Гимназия № 174',
                'station_id' => 5,
                'number' => '000008',
                'station_type_id' => 1,
                'antenna_type_id' => 1,
                'address' => 'ул. Пушкина, 67 "А"',
                'status' => 'real',
                'contract_type_id' => 2,
                'sphere_of_activity_id' => 1,
                'regulatory_works' => 'нет'
            ],
            [
                'title' => 'Магазин "Причал"',
                'station_id' => 4,
                'number' => '000009',
                'station_type_id' => 1,
                'antenna_type_id' => 1,
                'address' => 'ул. Ленина, 94',
                'status' => 'real',
                'contract_type_id' => 1,
                'sphere_of_activity_id' => 2,
                'regulatory_works' => 'нет'
            ],
            [
                'title' => 'Гипермаркет "Лента"',
                'station_id' => 3,
                'number' => '0000010',
                'station_type_id' => 5,
                'antenna_type_id' => 2,
                'address' => 'ул. Автомобильная, 17',
                'status' => 'real',
                'contract_type_id' => 1,
                'sphere_of_activity_id' => 2,
                'regulatory_works' => 'нет'
            ],
            [
                'title' => 'Автомастераская "ДвижОК"',
                'station_id' => 3,
                'number' => '0000011',
                'station_type_id' => 4,
                'antenna_type_id' => 3,
                'address' => 'ул. Пушкина, 1',
                'status' => 'real',
                'contract_type_id' => 1,
                'sphere_of_activity_id' => 3,
                'regulatory_works' => 'нет'
            ],

        ];

        foreach ($items as $item) {
            DB::table('station_objects')->updateOrInsert([
                "title" =>  $item['title'],
            ], $item);
        }
    }
}
