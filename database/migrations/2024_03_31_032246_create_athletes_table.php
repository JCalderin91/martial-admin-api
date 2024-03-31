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
        Schema::create('athletes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('academy_id')->constrained();
            $table->foreignId('belt_id')->constrained();
            $table->string('dni')->nullable();
            $table->string('firstname');
            $table->string('lastname');
            $table->string('address');
            $table->date('birth_date');
            $table->enum('gender',['f', 'm']);
            $table->string('blood_type', 5);
            $table->string('disability')->nullable();
            $table->string('observations')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('athletes');
    }
};
