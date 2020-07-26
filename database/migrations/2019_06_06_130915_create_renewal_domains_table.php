<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRenewalDomainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('renewal_domains', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('client_id')->nullable();
            $table->string('expiration_date');
            $table->string('renewal_date');
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
        Schema::dropIfExists('renewal_domains');
    }
}
