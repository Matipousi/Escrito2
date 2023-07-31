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
            
            schema::create('products', function (Blueprint $table) {
                $table->id();
                $table->string('name');
                $table->foreign('seller')->references('id')->on('seller');
                $table->string('price');
                $table->string('title');
                $table->date('modified_date');
                $table->time('time');
                $table->date('publish_date');
                $table->foreign('seller')->references('id')->on('seller');
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
        schema::dropIfExists('products');
    }
};
