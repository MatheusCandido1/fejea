<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConnectedTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('connected', function (Blueprint $table) {
            $table->id();
            $table->integer('id_ej');
            $table->integer('id_ej1');
            $table->integer('id_ej2')->nullable();
            $table->integer('id_ej3')->nullable();
            $table->integer('id_ej4')->nullable();
            $table->string('customer_name');
            $table->string('customer_gap');
            $table->string('customer_information')->nullable();
            $table->string('customer_phone')->nullable();
            $table->string('customer_email')->nullable();
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
        Schema::dropIfExists('connected');
    }
}
