<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('user_has_grade', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('grade_id')->constrained('grades')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('user_has_grade');
    }
};
