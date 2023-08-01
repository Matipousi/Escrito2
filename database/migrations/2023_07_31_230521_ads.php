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
                
                Schema::create('ads', function (Blueprint $table) {
                    $table->bigIncrements('id');
                    $table->string('url');
                    $table->date('expire_date');
                    $table->unsignedBigInteger('products_id');
                    $table->foreign('products_id')->references('id')->on('products');
                    $table->timestamps();
                });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ads');
    }
};
