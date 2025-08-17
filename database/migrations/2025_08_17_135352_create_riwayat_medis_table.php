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
        Schema::create('riwayat_medis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('users_id')->constrained('users')->cascadeOnDelete();
            $table->foreignId('doctor_id')->constrained('users')->cascadeOnDelete();
            $table->dateTime('visit_date');
            $table->string('no_identity');
            
            $table->string('parents_name');
            $table->string('parental employment');
            $table->text('treatment');
            $table->text('notes');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('riwayat_medis');
    }
};
