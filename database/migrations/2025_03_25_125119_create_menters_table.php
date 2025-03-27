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
        Schema::create('menters', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255);
            $table->string('tel', 255);
            $table->string('teaching_languages', 255);
            $table->integer('experience_years');
            $table->text('introduction');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menters');
    }
};
