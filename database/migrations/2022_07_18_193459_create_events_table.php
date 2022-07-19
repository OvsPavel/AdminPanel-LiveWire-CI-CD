<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('station_id')
                ->comment('ID станции прикрепления')
                ->nullable()
                ->constrained("stations")
                ->nullOnDelete();

            $table->unsignedBigInteger('station_object_id')
                ->comment('ID объекта')
                ->nullable()
                ->constrained("station_objects")
                ->nullOnDelete();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events');
    }
};
