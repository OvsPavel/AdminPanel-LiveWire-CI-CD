<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CreateAdminSeeder extends Seeder
{
    /**
     * Создание администратора
     *
     * @return void
     */
    public function run()
    {
        $items = [
            [
                'name' => 'Администратор',
                'email' => 'admin@admin.com',
                'email_verified_at' => NULL,
                'password' => bcrypt('admin'),
                'role_id' => 1,
                'station_id' => 1,
                'address' => 'г. Краснодар, ул. Северная, 405'
                ]
        ];

        foreach ($items as $item) {
            DB::table('users')->updateOrInsert([
                "email" =>  $item['email'],
            ], $item);
        }
    }
}
