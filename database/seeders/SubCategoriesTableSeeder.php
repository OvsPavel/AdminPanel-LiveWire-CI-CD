<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubCategoriesTableSeeder extends Seeder
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
                'title' => 'Указы Президента',
                'category_id' => 1
            ],
            [
                'title' => 'Законопроекты',
                'category_id' => 1
            ],
            [
                'title' => 'Курс рубля',
                'category_id' => 2
            ],
            [
                'title' => 'Налогообложение',
                'category_id' => 2
            ],
            [
                'title' => 'Новости Футбола',
                'category_id' => 3
            ],
            [
                'title' => 'А судьи кто ?!',
                'category_id' => 3
            ],
            [
                'title' => 'Столичные новости',
                'category_id' => 4
            ],
            [
                'title' => 'Новости глубинки',
                'category_id' => 4
            ],
        ];

        foreach ($items as $item) {
            DB::table('sub_categories')->updateOrInsert([
                "title" =>  $item['title'],
            ], $item);
        }
    }
}
