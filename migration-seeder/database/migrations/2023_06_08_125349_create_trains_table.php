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
        Schema::create('trains', function (Blueprint $table) {
    $table->id();                                 // ID univoco del treno
    $table->string('company');                    // Azienda
    $table->string('departure_station');          // Stazione di partenza
    $table->string('arrival_station');            // Stazione di arrivo
    $table->timestamp('departure_time')->nullable();         // Orario di partenza
    $table->timestamp('arrival_time')->nullable();           // Orario di arrivophp artisan migrate:fresh
    $table->string('train_code');                 // Codice del treno
    $table->integer('number_of_carriages');       // Numero di carrozze
    $table->boolean('is_on_time')->default(true); // In orario
    $table->boolean('is_cancelled')->default(false); // Cancellato
    $table->timestamps();                         // created_at e updated_at
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
};