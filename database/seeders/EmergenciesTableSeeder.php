<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmergenciesTableSeeder extends Seeder
{
    /**
     * Первичное наполнение таблицы с разновидностями событий
     *
     * @return void
     */
    public function run()
    {
        $items = [
            [
                'title' => 'Пожар',
                'emergency_type_id' => 1
            ],
            [
                'title' => 'Отмена пожарной тревоги',
                'emergency_type_id' => 1
            ],
            [
                'title' => 'Потеря связи',
                'emergency_type_id' => 2
            ],
            [
                'title' => 'Восстановление связи',
                'emergency_type_id' => 2
            ],
            [
                'title' => 'Неиcправность',
                'emergency_type_id' => 3
            ],
            [
                'title' => 'Норма ШС',
                'emergency_type_id' => 3
            ],
            [
                'title' => 'Вскрытие корпуса',
                'emergency_type_id' => 4
            ],
            [
                'title' => 'Закрытие корпуса',
                'emergency_type_id' => 4
            ],
        ];

        foreach ($items as $item) {
            DB::table('emergencies')->updateOrInsert([
                "title" =>  $item['title'],
            ], $item);
        }
    }
}
