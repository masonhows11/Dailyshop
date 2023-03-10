<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_specifications', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('product_id')->nullable();
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');

            $table->unsignedBigInteger('specification_id')->nullable();
            $table->foreign('specification_id')->references('id')->on('specifications')->onDelete('cascade');

            $table->string('category_id')->nullable();
            $table->string('filterable')->nullable();
            $table->string('specific_type')->nullable();
            $table->boolean('detail_page')->nullable();
            $table->integer('display_order')->nullable();
            $table->json('value');
            $table->unique(['product_id','specification_id']);
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
        Schema::dropIfExists('product_specifications');
    }
};
