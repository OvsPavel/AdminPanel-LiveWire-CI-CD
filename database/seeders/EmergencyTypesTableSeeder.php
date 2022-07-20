<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmergencyTypesTableSeeder extends Seeder
{
    /**
     * Первичное наполнение таблицы с Типами важности событий
     *
     * @return void
     */
    public function run()
    {
        $items = [
            ['title' => 'Чрезвычайная'],
            ['title' => 'Высокая'],
            ['title' => 'Средняя'],
            ['title' => 'Низкая']
        ];

        foreach ($items as $item) {
            DB::table('emergency_types')->updateOrInsert([
                "title" =>  $item['title'],
            ], $item);
        }
    }
}
