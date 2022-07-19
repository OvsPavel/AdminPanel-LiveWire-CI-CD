<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Таблица с объектами пожарных станций
     *
     * @return void
     */
    public function up()
    {
        Schema::create('station_objects', function (Blueprint $table) {

            $table->id();

            $table->string('number')->comment('Номер станции');

            $table->unsignedBigInteger('station_id')
                ->comment('ID станции прикрепления')
                ->nullable()
                ->constrained("stations")
                ->nullOnDelete();

            $table->unsignedBigInteger('station_type_id')
                ->comment('Тип объектовой станции')
                ->nullable()
                ->constrained("station_types")
                ->nullOnDelete();

            $table->unsignedBigInteger('antenna_type_id')
                ->comment('Тип антенны')
                ->nullable()
                ->constrained("antenna_types")
                ->nullOnDelete();

            $table->string('title')->comment('Наименование объекта');

            $table->string('address')->comment('Адрес объекта');

            $table->enum('status', ['real', 'test'])->default('real')->comment('Статус');

            $table->unsignedBigInteger('contract_type_id')
                ->comment('Тип договора с ЦТМ')
                ->nullable()
                ->constrained("contract_types")
                ->nullOnDelete();

            $table->unsignedBigInteger('sphere_of_activity_id')
                ->comment('Сфера деятельности')
                ->nullable()
                ->constrained("sphere_of_activities")
                ->nullOnDelete();

            $table->enum('regulatory_works', ['да', 'нет'])->default('нет')->comment('Регламентные работы');
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('station_objects');
    }
};
