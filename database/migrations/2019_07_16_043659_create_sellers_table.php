<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSellersTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sellers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('short_description');
            $table->string('description');
            $table->string('rfc');
            $table->string('brand');
            $table->integer('bank');
            $table->integer('address');
            $table->string('bank_account');
            $table->string('bank_number_clabe');
            $table->boolean('isActive');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('sellers');
    }
}
