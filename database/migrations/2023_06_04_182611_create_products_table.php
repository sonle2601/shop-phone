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
            $table->id();
            $table->string('ProName');
            $table->string('ProImage');
            $table->integer('ProCate');
            $table->integer('ProQuantity');
            $table->decimal('ProPrice');
            $table->string('ProInfo');
            $table->string('ProDes');
            $table->string('ProSlug');
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