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
            $table->string('fullname');
            $table->string('phoneNumber');
            $table->string('Email');
            $table->mediumText('Adresse');
            $table->string('status_message');
            $table->string('payment_mode');
            $table->string('payment_id')->nullable();
            $table->string('activity_id');
            $table->dateTime('Date');
            $table->time('Heure');
            $table->string('price');

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
