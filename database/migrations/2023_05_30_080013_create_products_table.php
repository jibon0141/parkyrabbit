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
            $table->string('product_name')->nullable()->unique();
            $table->string('supplier_name')->nullable();
            $table->string('product_image')->nullable();
            $table->text('short_description')->nullable();
            $table->text('long_description')->nullable();
            $table->integer('original_price')->nullable();
            $table->integer('sale_price')->nullable();
            $table->timestamps();
            $table->softDeletes();
          
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
