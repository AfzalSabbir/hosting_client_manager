<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRenewalHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('renewal_histories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('client_id')->nullable();
            $table->unsignedInteger('renewal_id')->nullable();
            $table->string('expiration_at');
            $table->unsignedInteger('renewal');
            $table->string('renewal_amount');
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
        Schema::dropIfExists('renewal_histories');
    }
}
