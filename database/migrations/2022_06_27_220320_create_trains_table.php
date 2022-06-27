<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();

            // Azienda
            // Stazione di partenza
            // Stazione di arrivo
            // Orario di partenza
            // Orario di arrivo
            // Codice Treno
            // Numero Carrozze
            // In orario
            // Cancellato

            $table->string('company', 50);
            $table->string('departure_station', 50);
            $table->string('finish_station', 50);
            $table->time('departure_time');
            $table->time('arrival_time');
            $table->smallInteger('train_code');
            $table->tinyInteger('number_of_carriages');
            $table->boolean('on_time', 4)->default(1);
            $table->boolean('is_deleted', 4)->default(0 );

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
        Schema::dropIfExists('trains');
    }
}
