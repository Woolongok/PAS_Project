<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void{
        Schema::create("students", function (Blueprint $table){
            $table->id();
            $table->string('name', length: 100);
            $table->foreignId('grade_id');
            $table->foreignId('department_id');
            $table->string('email', length: 100)->unique();
            $table->Text('alamat');
            $table->timestamps();
        });
       }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
