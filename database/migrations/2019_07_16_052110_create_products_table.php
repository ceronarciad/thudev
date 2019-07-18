<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProductsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('sku');
            $table->string('code');
            $table->text('short_description');
            $table->text('description');
            $table->decimal('price');
            $table->decimal('discount_price');
            $table->integer('discount_percent');
            $table->integer('stock');
            $table->integer('category');
            $table->boolean('hasDiscount');
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
        Schema::drop('products');
    }
}
