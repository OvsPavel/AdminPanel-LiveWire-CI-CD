<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContractTypesTableSeeder extends Seeder
{
    /**
     * Первичное наполнение таблицы c Типами Контрактов с ЦТМ
     *
     * @return void
     */
    public function run()
    {
        $items = [
            [
                'title' => 'ТО',
            ],
            [
                'title' => 'Мониторинг',
            ],
            [
                'title' => 'ТО + мониторинг',
            ],
            [
                'title' => 'Полное обслуживание',
            ]
            ,[
                'title' => 'Эксклюзивный Договор',
            ]
        ];


        foreach ($items as $item) {
            DB::table('contract_types')->updateOrInsert([
                "title" =>  $item['title'],
            ], $item);
        }
    }
}