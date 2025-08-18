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
        Schema::create('apartments', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->foreignId('location_id')->constrained()->onDelete('cascade');
            $table->foreignId('sublocation_id')->constrained()->onDelete('cascade');
            $table->foreignId('room_id')->constrained()->onDelete('cascade');
            $table->foreignId('renovation_id')->constrained()->onDelete('cascade');
            $table->foreignId('home_type_id')->constrained()->onDelete('cascade');
            $table->decimal('price');
            $table->string('area');
            $table->integer('floor');
            $table->boolean('elevator');
            $table->boolean('exchange');
            $table->boolean('parking');
            $table->integer('total_floors');
            $table->text('description')->nullable();
            $table->string('phone');
            $table->string('image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('apartments');
    }
};
