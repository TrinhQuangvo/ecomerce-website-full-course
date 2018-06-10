<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class VpProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vp_products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('prod_name');
            $table->string('prod_slug');
            $table->integer('price');
            $table->string('img');
            $table->string('warranty');
            $table->string('accessories');
            $table->string('condition');
            $table->tinyInteger('status');
            $table->string('promotion');
            $table->text('description');
            $table->tinyInteger('featured');
            //khóa phụ (fr key)
            $table->integer('cate_id')->unsigned();
            $table->foreign('cate_id')
                  ->references('id')
                  ->on('vp_categoies')
                  ->onDelete('cascade'); 
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
        Schema::dropIfExists('vp_products');
    }
}
