<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Klant extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('klant', function (Blueprint $table) {
            $table->id('klant');
            $table->string('name', 100)->nullable(false);
            $table->string('adres', 100)->nullable(false);
            $table->string('plaats', 100)->nullable(false);
            $table->string('postcode', 100)->nullable(false);
            $table->string('telefoon', 100)->nullable(false);
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
