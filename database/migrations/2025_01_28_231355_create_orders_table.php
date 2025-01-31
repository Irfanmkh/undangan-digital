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
            Schema::create('orders', function (Blueprint $table) {
                $table->id();
                $table->foreignId('template_id')->constrained();
                $table->string('nama_customer');
                $table->string('email_customer');
                $table->decimal('total_harga', 10, 2);
                $table->string('status')->default('pending');
                $table->string('link_pembayaran')->nullable();
                $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};