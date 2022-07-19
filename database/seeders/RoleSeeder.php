<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            ['title' => 'Администратор'],

            ['title' => 'Руководитель ЦТМ'],

            ['title' => 'Оператор ЦТМ'],

            ['title' => 'Клиент']
        ];


        foreach ($items as $item) {
            DB::table('roles')->updateOrInsert([
                "title" =>  $item['title']
            ], $item);
        }
    }
}
