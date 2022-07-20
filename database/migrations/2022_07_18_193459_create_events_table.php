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

            $table->string('title')->default('Новое событие');

            $table->unsignedBigInteger('station_id')
                ->comment('ID станции прикрепления')
                ->constrained("stations")
                ->nullOnDelete();

            $table->unsignedBigInteger('station_object_id')
                ->comment('ID объекта')
                ->constrained("station_objects")
                ->nullOnDelete();

            $table->unsignedBigInteger('emergency_id')
                ->comment('ID типа события')
                ->nullable()
                ->constrained("emergencies")
                ->nullOnDelete();

            $table->unsignedBigInteger('user_id')
                ->comment('ID оператора, взявшего событие в обработку')
                ->nullable()
                ->constrained("users")
                ->nullOnDelete();

            $table->dateTime('start_time');

            $table->boolean('is_accepted')->default(0);

            $table->dateTime('accept_time')->nullable();

            $table->boolean('is_closed')->default(0);

            $table->dateTime('close_time')->nullable();
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
