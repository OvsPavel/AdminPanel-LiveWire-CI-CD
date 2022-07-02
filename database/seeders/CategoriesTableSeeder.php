<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Первичное наполнение таблицы с Категориями
     *
     * @return void
     */
    public function run()
    {
        $items = [
            ['title' => 'Политика'],
            ['title' => 'Экономика'],
            ['title' => 'Спорт'],
            ['title' => 'Города']


        ];

        foreach ($items as $item) {
            DB::table('categories')->updateOrInsert([
                "title" =>  $item['title'],
            ], $item);
        }
    }
}
