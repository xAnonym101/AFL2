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
        Schema::create('shop_branches', function (Blueprint $table) {
            $table->id('branch_id');
            $table->string('branch_location');
            $table->string('branch_email');
            $table->string('branch_phone_number');
            $table->integer('workers_count')->nullable();
            $table->integer('products_count')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shop_branches');
    }
};
