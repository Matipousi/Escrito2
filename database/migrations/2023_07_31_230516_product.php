<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
            
            Schema::create('products', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->string('name');
                $table->unsignedBigInteger('seller_id');
                $table->foreign('seller_id')->references('id')->on('sellers');
                $table->integer('price');
                $table->string('title');
                $table->date('modified_date');
                $table->time('time');
                $table->date('publish_date');
                $table->string('description');
                $table->string('image');
                $table->boolean('ads');
                $table->timestamps();
            });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
