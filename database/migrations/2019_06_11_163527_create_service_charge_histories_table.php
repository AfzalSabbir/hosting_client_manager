<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServiceChargeHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_charge_histories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('client_id')->nullable();
            $table->unsignedInteger('service_id')->nullable();
            $table->string('expiration_at');
            $table->unsignedInteger('service');
            $table->string('service_amount');
            $table->unsignedtinyInteger('status')->default(1);
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
        Schema::dropIfExists('service_charge_histories');
    }
}
