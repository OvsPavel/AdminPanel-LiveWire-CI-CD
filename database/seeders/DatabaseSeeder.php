<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CreateAdminSeeder::class);
        \App\Models\User::factory(500)->create();

        $this->call(StationTypesTableSeeder::class);
        $this->call(AntennaTypesTableSeeder::class);
        $this->call(ContractTypesTableSeeder::class);
        $this->call(SphereOfActivitiesTableSeeder::class);
        $this->call(StationsTableSeeder::class);
        $this->call(StationObjectsTableSeeder::class);
        $this->call(EventSeeder::class);
        $this->call(RoleSeeder::class);
    }
}
