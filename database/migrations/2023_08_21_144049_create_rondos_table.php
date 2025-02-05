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
        Schema::create('rondos', function (Blueprint $table) {
            $table->id();
            $table->string('destination');
            $table->text('description');
            $table->date('date');
            $table->string('duree');
            $table->float('prixinscription');
            $table->text('image');
            $table->unsignedBigInteger('guide_id')->nullable();
            $table->foreign('guide_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rondos');
    }
};
