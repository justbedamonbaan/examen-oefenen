<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ReserveringenOverzicht extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reserveringen_overzicht', function (Blueprint $table) {
            $table->id('reserveringsnummer');
            $table->string('kamernummer', 100)->nullable(false);
            $table->string('gereserveerde_periode', 100)->nullable(false);
            $table->unsignedBigInteger('klant')->nullable(false);
            $table->foreign('klant')->references('klant')->on('klant')->onDelete('cascade');
            $table->rememberToken();
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
        Schema::dropIfExists('klant');
    }
}

