<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('contact_person');
            $table->string('mobile');
            $table->string('email');
            $table->string('address');
            $table->unsignedInteger('districe_id')->nullable();
            $table->unsignedInteger('upazilla_id')->nullable();
            $table->string('domain');
            $table->string('hosting');
            $table->string('project_price');
            $table->string('renewal_price');
            $table->string('service_charge');
            $table->string('expiration_date');
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
        Schema::dropIfExists('clients');
    }
}
