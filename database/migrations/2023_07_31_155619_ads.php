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
                
                schema::create('ads', function (Blueprint $table) {
                    $table->id();
                    $table->string('url');
                    $table->date('expire_date');
                    $table->foreign('ads')->references('id')->on('product');
                    $table->timestamps();
                });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        schema::dropIfExists('ads');
    }
};
