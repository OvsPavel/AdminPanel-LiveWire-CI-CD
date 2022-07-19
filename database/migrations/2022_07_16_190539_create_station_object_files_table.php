<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Таблица с файлыми / ссылками объектов пожарных станций
     *
     * @return void
     */
    public function up()
    {
        Schema::create('station_object_files', function (Blueprint $table) {

            $table->unsignedBigInteger('station_object_id')
                ->comment('ID объекта')
                ->nullable()
                ->constrained("station_objects")
                ->nullOnDelete();

            $table->string('file')
                ->comment('Файл')
                ->nullable();

                $table->string('link')
                ->comment('Ссылка')
                ->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('station_object_files');
    }
};
