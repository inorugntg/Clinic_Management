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
        Schema::create('medicines', function (Blueprint $table) {
            $table->id();
            $table->string('medicine_name'); 
            $table->integer('stock_quantity'); 
            $table->decimal('price', 10, 2); 
            $table->text('description')->nullable(); 
            $table->unsignedBigInteger('doctor_id'); // Kolom foreign key untuk menghubungkan dengan tabel doctors
            $table->timestamps();

            // Definisi foreign key constraint
            $table->foreign('doctor_id')->references('id')->on('doctors');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medicines');
    }
};
