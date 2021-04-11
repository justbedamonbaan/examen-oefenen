<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string("voorletters", 100)->nullable(false);
            $table->string("tussenvoegsel", 100)->nullable(true);
            $table->string("achternaam", 100)->nullable(false);
            $table->string("adres", 100)->nullable(false);
            $table->string("postcode", 100)->nullable(false);
            $table->string("woonplaats", 100)->nullable(false);
            $table->string('password', 100);

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
        Schema::dropIfExists('users');
    }
}
