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
        Schema::create('reservasis', function (Blueprint $table) {
            $table->id('reservasi_id');
            $table->unsignedBigInteger('reservasi_branch');
            $table->unsignedBigInteger('reservasi_guestId');
            $table->string('reservasi_billreceiver', 255);
            $table->dateTime('reservasi_checkin');
            $table->dateTime('reservasi_checkout');
            $table->date('reservasi_arrival');
            $table->date('reservasi_departure');
            $table->timestamps();

            $table->foreign('reservasi_branch')->references('branch_id')->on('branches')->onDelete('cascade');
            $table->foreign('reservasi_guestId')->references('guest_id')->on('guest_cards')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservasis');
    }
};
