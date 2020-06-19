<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRistorantiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ristoranti', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->string('address');
            $table->string('rating');
            $table->string('telephone');
            $table->string('type');
            $table->string('name');
            $table->string('name');
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
        Schema::dropIfExists('ristoranti');
    }
}
