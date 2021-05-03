<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingModel2sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('booking_model_2s', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('user_name');
            $table->string('select_broom');
            $table->string('department');
            $table->string('no_of_members');
            $table->string('purpose');
            $table->string('Refreshments');
            $table->string('Pickup_Date');
            $table->string('hour_start_time');
            $table->string('min_start_time');
            $table->string('am_pm_start_time');
            $table->string('hour_end_time');
            $table->string('min_end_time');
            $table->string('am_pm_end_time');
            $table->string('hour_serve_time');
            $table->string('min_serve_time');
            $table->string('am_pm_serve_time');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('booking_model_2s');
    }
}
