<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('product_name');
            $table->longText('product_title');
            $table->integer('product_price');
            $table->string('product_size')->nullable();
            $table->integer('product_quantity');
            $table->string('product_multi_images')->nullable();
            $table->string('product_color')->nullable();
            $table->longText('product_description');
            $table->integer('product_sale_price')->nullable();
            $table->string('product_category');
            $table->string('product_images');
            $table->integer('product_alert_qty')->nullable();
            $table->string('product_brand')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('products');
    }
}
