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
        Schema::create('specification_values', function (Blueprint $table) {
            $table->id();
            $table->string('title',125)->nullable();
            $table->unsignedBigInteger('display_order')->nullable();

            $table->unsignedBigInteger('specification_id');
            $table->foreign('specification_id')
                ->references('id')
                ->on('specifications')
                ->onDelete('cascade')->onUpdate('cascade');

            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')
                ->references('id')
                ->on('categories')
                ->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('specification_values');
    }
};
