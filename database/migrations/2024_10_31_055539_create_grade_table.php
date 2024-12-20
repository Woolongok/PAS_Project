<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('grades', function (Blueprint $table) {
            $table->id();
            $table->string('nama'); // Column for the grade name
            $table->foreignId('department_id')->constrained(); // Foreign key to departments
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExistsg('grades');
    }
};
