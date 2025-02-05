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
        Schema::create('reserver_rondos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('client_id')->nullable()->unique();
            $table->foreign('client_id')->references('id')->on('clients')->onDelete('cascade');
            $table->unsignedBigInteger('rondo_id')->nullable();
            $table->foreign('rondo_id')->references('id')->on('rondos')->onDelete('cascade');
            $table->string('type_reservation')->nullable();
            $table->date('date')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reserver_rondos');
    }
};
