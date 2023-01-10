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
            $table->id();
            $table->string('operator', 40);
            $table->string('arriving_from', 40);
            $table->string('destination', 40);
            $table->time('departure');
            $table->time('arrival');
            $table->string('train_number');
            $table->tinyInteger('car_number');
            $table->boolean('on_time')->default(1);
            $table->boolean('is_cancelled')->default(0);
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
};
